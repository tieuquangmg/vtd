<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $absence->user_id !!}</p>
</div>

<!-- Start Date Field -->
<div class="form-group">
    {!! Form::label('start_date', 'Start Date:') !!}
    <p>{!! $absence->start_date !!}</p>
</div>

<!-- Days Field -->
<div class="form-group">
    {!! Form::label('days', 'Days:') !!}
    <p>{!! $absence->days !!}</p>
</div>

<!-- User Approval Id Field -->
<div class="form-group">
    {!! Form::label('user_approval_id', 'User Approval Id:') !!}
    <p>{!! $absence->user_approval_id !!}</p>
</div>

<!-- Absence Status Id Field -->
<div class="form-group">
    {!! Form::label('absence_status_id', 'Absence Status Id:') !!}
    <p>{!! $absence->absence_status_id !!}</p>
</div>

<!-- User Note Field -->
<div class="form-group">
    {!! Form::label('user_note', 'User Note:') !!}
    <p>{!! $absence->user_note !!}</p>
</div>

<!-- Approval Note Field -->
<div class="form-group">
    {!! Form::label('approval_note', 'Approval Note:') !!}
    <p>{!! $absence->approval_note !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $absence->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $absence->updated_at !!}</p>
</div>

