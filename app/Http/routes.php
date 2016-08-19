<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Main@mainPage');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('create-survey/{id}', ['as' => 'create-survey', 'middleware' => 'auth', function ($id){
    return view('create-survey', ['id' => $id]);
}]);
Route::post('create-survey', ['as' => 'survey-post', 'middleware' => 'auth','uses' => 'Main@createSurvey']);
Route::get('profile', ['as' => 'profile','middleware' => 'auth', 'uses' => 'Main@profile']);
Route::get('new-survey', ['middleware' => 'auth','as' => 'new-survey', function(){
    return view('new-survey');
}]);
Route::post('new-survey', ['middleware' => 'auth','as' => 'new-survey-post', 'uses' => 'Main@newSurvey']);
Route::get('survey-page/{id}', ['as' => 'survey-page', 'uses' => 'Main@surveyPage']);
Route::post('survey-page', ['as' => 'save-response-post', 'uses' => 'Main@saveResponse']);