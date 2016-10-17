@extends('app')
@section('content')

<h1>Profile</h1>
    <div id="contentWrapper">

        <div id="goalsChart"></div>




        <h1>Weekly Goal<br>{{$profileGoal}} miles</h1>
        <h1>Current Miles<br>{{$currentWeeklyMiles}} miles </h1>
        <h1>{{$totalTime}} h.m</h1>


        <script type="text/javascript">
            window.onload = function () {
                var chart = new CanvasJS.Chart("chartContainer", {

                    title:{
                        text: "Miles Per Day"
                    },
                    axisX:{
                        title: "Day",
                        interval:7,
                        intervalType: "day",

                    },
                    axisY: {
                        title: "Miles"
                    },
                    data: [
                        {
                            type: "area",

                            dataPoints: [
                                    @foreach($userActivities as $userActivity)
                                { x: new Date('{{$userActivity->created_at->year}}', '{{$userActivity->created_at->month}}', '{{$userActivity->created_at->day}}'), y: {{$userActivity->distance}}},




                                    @endforeach



                            ]
                        }
                    ]
                });

                chart.render();
            }
        </script>





        <div id="chartContainer" style="height: 400px; width: 100%;"></div>
    </div>


@stop