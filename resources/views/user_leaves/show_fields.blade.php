<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $userLeave->id !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $userLeave->user_id !!}</p>
</div>

<!-- Absence Type Id Field -->
<div class="form-group">
    {!! Form::label('absence_type_id', 'Absence Type Id:') !!}
    <p>{!! $userLeave->absence_type_id !!}</p>
</div>

<!-- Year Id Field -->
<div class="form-group">
    {!! Form::label('year_id', 'Year Id:') !!}
    <p>{!! $userLeave->year_id !!}</p>
</div>

<!-- Total Leave Field -->
<div class="form-group">
    {!! Form::label('total_leave', 'Total Leave:') !!}
    <p>{!! $userLeave->total_leave !!}</p>
</div>

<!-- Taken Leave Field -->
<div class="form-group">
    {!! Form::label('taken_leave', 'Taken Leave:') !!}
    <p>{!! $userLeave->taken_leave !!}</p>
</div>

<!-- Balance Leave Field -->
<div class="form-group">
    {!! Form::label('balance_leave', 'Balance Leave:') !!}
    <p>{!! $userLeave->balance_leave !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $userLeave->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $userLeave->updated_at !!}</p>
</div>

