<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $serverStatus->id !!}</p>
</div>

<!-- Server Status Name Field -->
<div class="form-group">
    {!! Form::label('server_status_name', 'Server Status Name:') !!}
    <p>{!! $serverStatus->server_status_name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $serverStatus->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $serverStatus->updated_at !!}</p>
</div>

