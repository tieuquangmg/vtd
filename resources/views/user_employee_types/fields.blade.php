<!-- User Employee Type Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_employee_type_name', 'User Employee Type Name:') !!}
    {!! Form::text('user_employee_type_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('userEmployeeTypes.index') !!}" class="btn btn-default">Cancel</a>
</div>
