<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

    @yield('header')

    @yield('content')


    <footer>
        <ul>
            <li><a href="/feed">Feed</a></li>
            <li><a href="/goals">Goals</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="/more">More</a></li>
        </ul>
    </footer>
</body>

</html>