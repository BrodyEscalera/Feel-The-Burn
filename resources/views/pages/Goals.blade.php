@extends('app')
@section('content')

    <h1> Goals</h1>
    <div id="contentWrapper">
<h3>  Weekly mileage goal<br>{{$myGoal}} miles</h3>


        {!! Form::model($User,['method' => 'PATCH','action'=>['GoalsController@update',$User->id]]) !!}
    <form>

        <div class="form-group">
            {!! Form::label('weeklyGoal','Goal') !!}
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            {!! Form::text('weeklyGoal',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('update',['class'=>'btn btn-primary form-control']) !!}

        </div>

    </form>
        {!! Form::close() !!}

    </div>

@stop