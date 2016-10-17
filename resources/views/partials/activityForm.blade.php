<div class="form-group">
    {!! Form::label('activity','Activity') !!}
    <i class="fa fa-star-o" aria-hidden="true"></i>
    {!! Form::select('activity', ['run' => 'run'],'run') !!}
</div>

<div class="form-group">

    {!! Form::label('activityName','Name') !!}
    {!! Form::text('activityName',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('distance','Distance') !!}
    <i class="fa fa-line-chart" aria-hidden="true"></i>
    {!! Form::text('distance',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('time','Time') !!}
    <i class="fa fa-clock-o" aria-hidden="true"></i>
    {!! Form::text('time',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}

</div>