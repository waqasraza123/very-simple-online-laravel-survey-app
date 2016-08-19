@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Some publicly available surveys.</div>

                <div class="panel-body">
                    @if(!($surveys->isEmpty()))
                        @foreach($surveys as $survey)
                            <a href="{{url('survey-page', [$survey->id])}}"><button class="btn btn-default">{{$survey->name}}</button></a>
                        @endforeach
                        @else
                        <h1>There are no public surveys yet.</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
