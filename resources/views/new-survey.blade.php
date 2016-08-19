@extends('layouts.app')
@section('content')
    <div class="col-sm-12">
        <form class="survey-form form-horizontal" action="{{route('new-survey-post')}}" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="survey-name" class="col-md-4 control-label">Survey Name</label>

                <div class="col-md-6">
                    <input required id="survey-name" type="text" class="form-control" name="survey-name" placeholder="survey name here">
                </div>
            </div>

            <div class="form-group">
                <label for="survey-visibility" class="col-md-4 control-label">Survey Visibility</label>

                <div class="col-md-6">
                    <label class="radio-inline"><input required type="radio" name="survey-visibility" value="1">Public</label>
                    <label class="radio-inline"><input type="radio" name="survey-visibility" value="0">Private</label>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Add Survey
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection