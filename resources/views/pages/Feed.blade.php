@extends('app')
@section('content')

    <h1>Feed</h1>
    <a class="addActivity" href="activities/create"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Add Activity</a>
    @foreach($userActivities as $userActivity)

        <div class="activityWrapper">


                <table id="socialIconsTable">

                    <tr>
                        <td class="postedAt">{{$userActivity->created_at->diffForHumans()}}</td>
                        <td class="socialComment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a></td>
                        <td class="socialIcons" ><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></td>
                        <td class="socialIcons"><a href="#"> <i class="fa fa-fire" aria-hidden="true"></i></a></td>

                    </tr>
                </table>
            <a href="{{action('ActivitiesController@show',[$userActivity->id])}}">
            <table style="width:100%">
                <caption class="activityName">{{$userActivity->activityName}}</caption>
                <tr>
                    <th class="activityLabel"><i class="fa fa-star-o" aria-hidden="true"></i></th>
                    <th class="activityLabel"><i class="fa fa-line-chart" aria-hidden="true"></i></th>
                    <th class="activityLabel"><i class="fa fa-clock-o" aria-hidden="true"></i></th>
                </tr>
                <tr>
                    <td class="activity">{{$userActivity->activity}}</td>
                    <td class="distance">{{$userActivity->distance}} miles </td>
                    <td class="time">{{$userActivity->time}} minutes</td>
                </tr>

            </table></a>

        </div>

    @endforeach

@stop

