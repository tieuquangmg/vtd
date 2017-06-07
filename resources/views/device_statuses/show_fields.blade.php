<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $deviceStatus->id !!}</p>
</div>

<!-- Device Status Name Field -->
<div class="form-group">
    {!! Form::label('device_status_name', 'Device Status Name:') !!}
    <p>{!! $deviceStatus->device_status_name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $deviceStatus->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $deviceStatus->updated_at !!}</p>
</div>

