@extends('app')
@section('content')
    <h1>Editing Activity: {{$activity->activityName}}</h1>
    <a class="backBtn" href="{{action('ActivitiesController@show',[$activity->id])}}"><i class="fa fa-arrow-left fa-2x" aria-hidden="true" ></i></a>


    <hr>
    @include('errors.list')
    {!! Form::model($activity,['method' => 'PATCH','action'=>['ActivitiesController@update',$activity->id]]) !!}

  @include('partials.activityForm',['submitButtonText'=>'Update Activity'])

    {!! Form::close() !!}

    <a class="btn btn-danger form-control" href="{{action('ActivitiesController@destroy',[$activity->id])}}/delete">Delete</a>



@stop