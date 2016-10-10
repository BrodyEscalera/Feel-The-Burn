@extends('app')
@section('content')

    <h1> Goals</h1>
    <div id="contentWrapper">




    <form>
        Weekly mileage goal<br>
        <input type="text" name="miles">miles<br>
        <br>
        <input type="submit" value="Submit">
        <!-- Need to access github Authentication using socialite -->

    </form>

    </div>

@stop