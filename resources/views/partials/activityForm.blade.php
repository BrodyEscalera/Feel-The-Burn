<div class="form-group">
    {!! Form::label('activity','Activity') !!}
    {!! Form::select('activity', ['run' => 'run'],'run') !!}
</div>

<div class="form-group">

    {!! Form::label('activityName','Name') !!}
    {!! Form::text('activityName',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('distance','Distance') !!}
    {!! Form::text('distance',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('time','Time') !!}
    {!! Form::text('time',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}

</div>