@extends('layouts.app')
@section('content')
    <div class="col-sm-12">
        <form class="survey-form form-horizontal" action="{{route('survey-post')}}" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="question" class="col-md-4 control-label">Question?</label>

                <div class="col-md-6">
                    <input required id="question" type="text" class="form-control" name="question" placeholder="your question here">
                </div>
            </div>

            <div class="form-group">
                <label for="option1" class="col-md-4 control-label">Option A</label>

                <div class="col-md-6">
                    <input required id="option1" type="text" class="form-control" name="option1" placeholder="option here">
                </div>
            </div>

            <div class="form-group">
                <label for="option2" class="col-md-4 control-label">Option B</label>

                <div class="col-md-6">
                    <input required id="option2" type="text" class="form-control" name="option2" placeholder="option here">
                </div>
            </div>

            <div class="form-group">
                <label for="option3" class="col-md-4 control-label">Option C</label>

                <div class="col-md-6">
                    <input required id="option3" type="text" class="form-control" name="option3" placeholder="option here">
                </div>
            </div>

            <div class="form-group">
                <label for="option4" class="col-md-4 control-label">Option D</label>

                <div class="col-md-6">
                    <input required id="option4" type="text" class="form-control" name="option4" placeholder="option here">
                </div>
            </div>

            <div class="form-group">
                <label for="correct_option" class="col-md-4 control-label">Correct Option</label>

                <div class="col-md-6">
                    <input required id="correct_option" type="text" class="form-control" name="correct_option" placeholder="correct option here">
                </div>
            </div>
            <input type="hidden" name="survey-id" value="{{$id}}">

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Add Question
                    </button>
                </div>
            </div>


        </form>
    </div>
@endsection