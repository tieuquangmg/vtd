<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $deviceBrand->id !!}</p>
</div>

<!-- Device Brand Name Field -->
<div class="form-group">
    {!! Form::label('device_brand_name', 'Device Brand Name:') !!}
    <p>{!! $deviceBrand->device_brand_name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $deviceBrand->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $deviceBrand->updated_at !!}</p>
</div>