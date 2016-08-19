@extends('layouts.app')
@section('content')
    <div class="col-sm-4">
        <button class="btn btn-default"><a href="{{route('new-survey')}}">Create Survey</a></button>
    </div>
    <div class="col-sm-8">
        @if(session('survey'))
            <div class="alert alert-success">
                {{ session('survey') }}
            </div>
        @endif

        @foreach($surveys as $survey)
            <a href="{{url('survey-page', [$survey->id])}}"><button class="btn btn-default">{{$survey->name}}</button></a>
        @endforeach
    </div>
@endsection