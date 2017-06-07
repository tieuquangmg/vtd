<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Absence Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('absence_type_id', 'Absence Type Id:') !!}
    {!! Form::number('absence_type_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Year Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year_id', 'Year Id:') !!}
    {!! Form::number('year_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Leave Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_leave', 'Total Leave:') !!}
    {!! Form::number('total_leave', null, ['class' => 'form-control']) !!}
</div>

<!-- Taken Leave Field -->
<div class="form-group col-sm-6">
    {!! Form::label('taken_leave', 'Taken Leave:') !!}
    {!! Form::number('taken_leave', null, ['class' => 'form-control']) !!}
</div>

<!-- Balance Leave Field -->
<div class="form-group col-sm-6">
    {!! Form::label('balance_leave', 'Balance Leave:') !!}
    {!! Form::number('balance_leave', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('userLeaves.index') !!}" class="btn btn-default">Cancel</a>
</div>
