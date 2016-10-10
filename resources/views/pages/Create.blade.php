@extends('app')
@section('content')

    <h1>Create Activity</h1>
    <hr>
    {!! Form::open(['url' => 'activities']) !!}

    @include('partials.activityForm',['submitButtonText'=>'Add Activity'])



    {!! Form::close() !!}

   @include('errors.list')
@stop