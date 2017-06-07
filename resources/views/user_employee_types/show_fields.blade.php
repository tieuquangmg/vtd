<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $userEmployeeType->id !!}</p>
</div>

<!-- User Employee Type Name Field -->
<div class="form-group">
    {!! Form::label('user_employee_type_name', 'User Employee Type Name:') !!}
    <p>{!! $userEmployeeType->user_employee_type_name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $userEmployeeType->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $userEmployeeType->updated_at !!}</p>
</div>

