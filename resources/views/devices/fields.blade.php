<!-- Device Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('device_code', 'Mã thiết bị:') !!}
    {!! Form::text('device_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Device Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('device_name', 'Tên thiết bị:') !!}
    {!! Form::text('device_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Device Money Field -->
<div class="form-group col-sm-6">
    {!! Form::label('device_money', 'Giá:') !!}
    {!! Form::number('device_money', null, ['class' => 'form-control']) !!}
</div>

<!-- User-Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'Người sử dụng:') !!}
    {!! Form::select('user_id',$userList, old('user_id'), ['class' => 'form-control'])!!}

</div>

<div class="form-group col-sm-6">
    {!! Form::label('supplier_id', 'Nhà cung cấp') !!}
    {!! Form::select('supplier_id',$supplier, old('supplier_id'), ['class' => 'form-control'])!!}
</div>

<!-- Date Guarantee End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_guarantee_end', 'Ngày hết bảo hành:') !!}
    <div class="input-group date">
        <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </div>
        {!! Form::text('date_guarantee_end', (Request::is('*edit'))? $device->date_guarantee_end->format('d/m/Y') : null, ['class' => 'form-control datepicker','id'=>'datepicker']) !!}
    </div>
</div>

<!-- Date Inventory Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_inventory', 'Ngày kiểm kê:') !!}
    <div class="input-group date">
        <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </div>
        {!! Form::text('date_inventory', (Request::is('*edit'))? $device->date_inventory->format('d/m/Y') : null, ['class' => 'form-control datepicker ','id'=>'datepicker']) !!}
    </div>
</div>

<!-- Date Buy Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_buy', 'Ngày mua:') !!}
    <div class="input-group date">
        <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </div>
        {!! Form::text('date_buy', (Request::is('*edit'))? $device->date_buy->format('d/m/Y') : null, ['class' => 'form-control datepicker','id'=>'datepicker']) !!}
    </div>
</div>

<!-- Device Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('device_status_id', 'Trạng thái:') !!}
    {!! Form::select('device_status_id',$statuslist, old('device_status_id'), ['class' => 'form-control'])!!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit((Request::is('*edit'))? 'Tạo mới': 'Cập nhật', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('devices.index') !!}" class="btn btn-default">Hủy</a>
</div>
