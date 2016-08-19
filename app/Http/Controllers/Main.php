<?php

namespace App\Http\Controllers;

use App\Option;
use App\Question;
use App\Response;
use App\Survey;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class Main extends Controller
{
    //save the survey form in db
    public function createSurvey(Request $request){
        $questions = new Question();
        $options = new Option();

        $questions -> question = $request->input('question');
        $questions -> surveyId = $request->input('survey-id');
        $questions->save();

        $options -> option1 = $request->input('option1');
        $options -> option2 = $request->input('option2');
        $options -> option3 = $request->input('option3');
        $options -> option4 = $request->input('option4');
        $options -> correct = $request->input('correct_option');
        $options->questionId = $questions->id;

        $options->save();

        return redirect()->back();
    }

    //add new survey to db
    public function newSurvey(Request $request){
        $surveyName = $request->input('survey-name');
        $visibility = $request->input('survey-visibility');
        $userId = Auth::user()->id;
        $surveys = new Survey();

        $surveys->name = $surveyName;
        $surveys->userId = $userId;
        $surveys->visibility = $visibility;
        $surveys->save();

        return redirect()->route('profile');
    }

    public function profile(){
        $surveys = new Survey();
        $surveys = Survey::all()->where('userId', Auth::user()->id);

        return view('profile', ['surveys' => $surveys]);
    }

    //show all questions for that survey
    public function surveyPage($id){

        $surveyVisibility = Survey::find($id);

        if($surveyVisibility->visibility == 0){
            if(Auth::check()){
                $questions = Question::where('surveyId', $id)->paginate(1);
                return view('survey-page', ['questions' => $questions, 'id' => $id]);
            }
            else{
                return redirect('login');
            }
        }
        else{
            $questions = Question::where('surveyId', $id)->paginate(1);
            return view('survey-page', ['questions' => $questions, 'id' => $id]);
        }
    }

    public function saveResponse(Request $request){
        $response = new Response();
        $response->response = $request->input('response');
        $response->questionId = $request->input('question-id');
        $response->save();

        return redirect()->back();
    }

    public function mainPage(){
        $surveys = Survey::where('visibility', '1')->get();
        return view('welcome', ['surveys' => $surveys]);
    }
}
