@extends('app')
@section('content')

    <h1> Login</h1>
    <form>
        First name:<br>
        <input type="text" name="firstname"><br>
        Last name:<br>
        <input type="text" name="lastname"><br>
        <input type="submit" value="Submit">
        <!-- Need to access github Authentication using socialite -->

    </form>


@stop

