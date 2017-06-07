<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'Nhân viên:') !!}
    {!! Form::select('user_id',$userList, old('user_id'), ['class' => 'form-control'])!!}
</div>

<!-- Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_date', 'Ngày bắt đầu:') !!}
    <div class="input-group date">
        <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </div>
        {!! Form::text('start_date', (Request::is('*edit'))? $absence->start_date->format('d/m/Y') : null, ['class' => 'form-control datepicker ']) !!}
    </div>
</div>

<!-- Days Field -->
<div class="form-group col-sm-6">
    {!! Form::label('days', 'Số ngày:') !!}
    {!! Form::number('days', null, ['class' => 'form-control']) !!}
</div>

<!-- User Approval Id Field -->
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('user_approval_id', 'User Approval Id:') !!}--}}
    {{--{!! Form::number('user_approval_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Absence Status Id Field -->
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('absence_status_id', 'Absence Status Id:') !!}--}}
    {{--{!! Form::text('absence_status_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- User Note Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('user_note', 'Ghi chú:') !!}
    {!! Form::textarea('user_note', null, ['class' => 'form-control']) !!}
</div>

<!-- Approval Note Field -->
{{--<div class="form-group col-sm-12 col-lg-12">--}}
    {{--{!! Form::label('approval_note', 'Approval Note:') !!}--}}
    {{--{!! Form::textarea('approval_note', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Gửi', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('absences.index') !!}" class="btn btn-default">Hủy bỏ</a>
    <a href="{!! route('absences.index') !!}" class="btn btn-success">Phê duyệt</a>
    <a href="{!! route('absences.index') !!}" class="btn btn-danger">Hủy bỏ</a>
</div>
