<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $userStatus->id !!}</p>
</div>

<!-- User Status Name Field -->
<div class="form-group">
    {!! Form::label('user_status_name', 'User Status Name:') !!}
    <p>{!! $userStatus->user_status_name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $userStatus->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $userStatus->updated_at !!}</p>
</div>

