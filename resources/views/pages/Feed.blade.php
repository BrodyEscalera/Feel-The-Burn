@extends('app')
@section('content')

    <h1>Feed</h1>
    <a href="activities/create">+ Add Activity</a>
    @foreach($userActivities as $userActivity)

        <panel>
            <a href="{{action('ActivitiesController@show',[$userActivity->id])}}"> <ul>
                    <li> {{$userActivity->activityName}}</li>
                    <li> {{$userActivity->distance}} mile </li>
                    <li> {{$userActivity->activity}}</li>
                    <li> {{$userActivity->time}} minutes</li>

                </ul></a>

        </panel>

    @endforeach

@stop

