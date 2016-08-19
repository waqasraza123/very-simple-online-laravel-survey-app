@extends('layouts.app')
@section('content')
    <div class="col-sm-4">
        <a href="{{url('create-survey', ['id' => $id])}}">
            <button class="btn btn-default">
                Add Questions
            </button>
        </a>
    </div>
    <div class="col-sm-8">
        <form class="form" action="{{route('save-response-post')}}" method="post">
            {{ csrf_field() }}
            @if(!($questions->isEmpty()))
                @foreach($questions as $question)
                    <div class="question-data">
                        <h1 class="question">{{$question->question}}</h1>
                        @foreach($question->options as $answer)
                            <label class="radio-inline answer"><input required type="radio" name="response" value="option1">{{$answer->option1}}</label>
                            <label class="radio-inline answer"><input required type="radio" name="response" value="option2">{{$answer->option2}}</label>
                            <label class="radio-inline answer"><input required type="radio" name="response" value="option3">{{$answer->option3}}</label>
                            <label class="radio-inline answer"><input required type="radio" name="response" value="option4">{{$answer->option4}}</label>
                        @endforeach
                    </div>
                    <input type="hidden" value="{{$question->id}}" name="question-id">
                    <div class="form-group">
                        <div class="">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                @endforeach
            @else
                <h3>There are no questions in this survey.</h3>
            @endif

            {{ $questions->links() }}
        </form>
    </div>
@endsection