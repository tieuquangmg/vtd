<!-- Absence Type Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('absence_type_name', 'Absence Type Name:') !!}
    {!! Form::text('absence_type_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('absenceTypes.index') !!}" class="btn btn-default">Cancel</a>
</div>
