<!-- Device Brand Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('device_brand_name', 'Device Brand Name:') !!}
    {!! Form::text('device_brand_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('deviceBrands.index') !!}" class="btn btn-default">Cancel</a>
</div>
