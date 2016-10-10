@extends('app')
@section('content')

    <h1>{{$activity->activityName}}</h1>
    <a href="{{action('ActivitiesController@edit',[$activity->id])}}">edit</a>
    <div id="contentWrapper">

            <panel>
                    <ul>
                        <li> {{$activity->distance}} mile </li>
                        <li> {{$activity->activity}}</li>
                        <li> {{$activity->time}} minutes</li>

                    </ul>

            </panel>

    </div>


@stop