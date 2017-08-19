<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'Nhân viên:') !!}
    {!! Form::hidden('user_id',$absence->user_id, ['class' => 'form-control'])!!}
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
    {!! Form::hidden('user_approval_id', Auth::user()->id, ['class' => 'form-control']) !!}
<!-- Absence Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('absence_status_id', 'Cập nhật trạng thái') !!}
    {!! Form::select('absence_status_id',['2'=>'Đồng ý','3'=>'Từ chối'],2, ['class' => 'form-control']) !!}
</div>

<!-- User Note Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('user_note', 'Ghi chú:') !!}
    <div>{!! $absence->user_note !!}</div>
</div>

<!-- Approval Note Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('approval_note', 'Ghi chú: ') !!}
    {!! Form::textarea('approval_note', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Phê duyệt', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('absences.index') !!}" class="btn btn-danger">Hủy bỏ</a>
</div>
