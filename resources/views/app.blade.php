<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/main.css">

</head>
<body>
<div id="bodyContentWrapper">
    <div id="headerContent">
    @yield('header')
    </div>
    <div id="pageContent">
    @yield('content')
    </div>


    <footer>
        <ul>
            <li #feedNav><a href="/feed"><i class="fa fa-comments fa-2x"></i><br>Feed</a></li>
            <li #goalsNav><a href="/goals"><i class="fa fa-bar-chart fa-2x"></i><br> Goals</a></li>
            <li #profileNav><a href="/profile"><i class="fa fa-meh-o fa-2x"></i><br> Profile</a></li>
            <li #moreNav><a href="/more"><i class="fa fa-ellipsis-h fa-2x"></i><br> More</a></li>
        </ul>
    </footer>
    </div>
<script src="/js/canvasjs.min.js"></script>
</body>

</html>