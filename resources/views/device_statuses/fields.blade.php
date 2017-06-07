<!-- Device Status Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('device_status_name', 'Device Status Name:') !!}
    {!! Form::text('device_status_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('deviceStatuses.index') !!}" class="btn btn-default">Cancel</a>
</div>
