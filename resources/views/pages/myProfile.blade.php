@extends('app')
@section('content')

<h1>Profile</h1>
    <div id="contentWrapper">

        <div id="goalsChart"></div>




        <div id="chartCont" style="height: 400px; width: 100%;"></div>

        <h3>Time Spent: {{$totalTime}} </h3>



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



                var chart2 = new CanvasJS.Chart("chartCont",
                        {
                            title:{
                                text: ("Weekly Goal "+ ""+({{$profileGoal}})+" miles" )
                            },
                            animationEnabled: true,
                            data: [
                                {
                                    type: "doughnut",
                                    startAngle: 60,
                                    toolTipContent: "{legendText}: {y} - <strong>#percent% </strong>",
                                    showInLegend: true,
                                    explodeOnClick: false, //**Change it to true
                                    dataPoints: [
                                        {y: {{$currentWeeklyMiles}}, indexLabel: "Completed #percent%", legendText: "Miles Completed" },
                                        {y: {{$currentWeeklyPercent}}, indexLabel: "Needed #percent%", legendText: "Miles Needed " },

                                    ]
                                }
                            ]
                        });
                chart2.render();
                chart.render();

            }
        </script>





        <div id="chartContainer" style="height: 400px; width: 100%;"></div>
    </div>


@stop