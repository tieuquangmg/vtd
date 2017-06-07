<!-- Server Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('server_name', 'Server Name:') !!}
    {!! Form::text('server_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Server First Link Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('server_first_link', 'Server First Link:') !!}
    {!! Form::textarea('server_first_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Server Second Link Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('server_second_link', 'Server Second Link:') !!}
    {!! Form::textarea('server_second_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Server Ip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('server_ip', 'Server Ip:') !!}
    {!! Form::text('server_ip', null, ['class' => 'form-control']) !!}
</div>

<!-- Server Expire Day Field -->
<div class="form-group col-sm-6">
    {!! Form::label('server_expire_day', 'Server Expire Day:') !!}
    {!! Form::text('server_expire_day', null, ['class' => 'form-control']) !!}
</div>

<!-- Server Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('server_status', 'Server Status:') !!}
    {!! Form::number('server_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('servers.index') !!}" class="btn btn-default">Cancel</a>
</div>
