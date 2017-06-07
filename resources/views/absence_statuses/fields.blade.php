<!-- Absence Status Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('absence_status_name', 'Absence Status Name:') !!}
    {!! Form::text('absence_status_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('absenceStatuses.index') !!}" class="btn btn-default">Cancel</a>
</div>
