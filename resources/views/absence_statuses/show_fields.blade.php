<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $absenceStatus->id !!}</p>
</div>

<!-- Absence Status Name Field -->
<div class="form-group">
    {!! Form::label('absence_status_name', 'Absence Status Name:') !!}
    <p>{!! $absenceStatus->absence_status_name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $absenceStatus->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $absenceStatus->updated_at !!}</p>
</div>

