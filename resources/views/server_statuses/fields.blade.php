<!-- Server Status Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('server_status_name', 'Server Status Name:') !!}
    {!! Form::text('server_status_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('serverStatuses.index') !!}" class="btn btn-default">Cancel</a>
</div>
