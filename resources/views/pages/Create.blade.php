@extends('app')
@section('content')

    <h1>Create Activity</h1>
    <a class="backBtn" href="/feed"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
    <hr>
    @include('errors.list')
    {!! Form::open(['url' => 'activities']) !!}

    @include('partials.activityForm',['submitButtonText'=>'Add Activity'])



    {!! Form::close() !!}


@stop