@extends('app')
@section('content')

    <h1 class="activityName">{{$activity->activityName}}</h1>
    <a class="backBtn" href="/feed"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>

    <a class="editBtn" href="{{action('ActivitiesController@edit',[$activity->id])}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>

    <div id="contentWrapper">

            <div class="activityWrapper" >

                <table style="width:100%">

                    <tr>
                        <th class="activityLabel"><i class="fa fa-star-o" aria-hidden="true"></i></th>
                        <th class="activityLabel"><i class="fa fa-line-chart" aria-hidden="true"></i></th>
                        <th class="activityLabel"><i class="fa fa-clock-o" aria-hidden="true"></i></th>
                    </tr>
                    <tr>
                        <td class="activity">{{$activity->activity}}</td>
                        <td class="distance">{{$activity->distance}} miles </td>
                        <td class="time">{{$activity->time}} minutes</td>
                    </tr>
                </table>

            </div>

    </div>


@stop