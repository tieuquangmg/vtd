<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $absenceType->id !!}</p>
</div>

<!-- Absence Type Name Field -->
<div class="form-group">
    {!! Form::label('absence_type_name', 'Absence Type Name:') !!}
    <p>{!! $absenceType->absence_type_name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $absenceType->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $absenceType->updated_at !!}</p>
</div>

