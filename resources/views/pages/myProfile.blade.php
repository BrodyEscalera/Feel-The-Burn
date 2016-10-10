@extends('app')
@section('content')

<h1>Profile</h1>
    <div id="contentWrapper">
        <h1></h1>
        <h1>{{$currentWeeklyMiles}} total miles for the week</h1>
        <h1>{{$totalTime}} Current total time</h1>

        @foreach($userActivities as $userActivity)

            <panel>

                    <li> {{$userActivity->distance}} </li>


                </ul></a>

            </panel>

        @endforeach
    </div>


@stop