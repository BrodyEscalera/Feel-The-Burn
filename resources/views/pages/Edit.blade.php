@extends('app')
@section('content')
    <h1>Editing Activity: {{$activity->activityName}}</h1>


    <hr>
    {!! Form::model($activity,['method' => 'PATCH','action'=>['ActivitiesController@update',$activity->id]]) !!}

  @include('partials.activityForm',['submitButtonText'=>'Update Activity'])

    {!! Form::close() !!}

    <a class="btn btn-danger form-control" href="{{action('ActivitiesController@destroy',[$activity->id])}}/delete">Delete</a>


   @include('errors.list')
@stop