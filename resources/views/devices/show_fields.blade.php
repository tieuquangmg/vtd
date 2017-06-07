<div class="row">
    <div class="col-xs-6">
        <div class="form-group">
            {!! Form::label('device_code', 'Mã thiết bị',['class'=>'col-md-4 control-label']) !!}
            <p>{!! $device->device_code !!}</p>
        </div>

        <!-- Device Name Field -->
        <div class="form-group">
            {!! Form::label('device_name', 'Tên thiết bị',['class'=>'col-md-4 control-label']) !!}
            <p>{!! $device->device_name !!}</p>
        </div>

        <!-- Device Money Field -->
        <div class="form-group">
            {!! Form::label('device_money', 'Giá tiền:',['class'=>'col-md-4 control-label']) !!}
            <p>{!! $device->getFormattedDeviceMoney()  !!} VND</p>
        </div>

        <!-- User-Id Field -->
        <div class="form-group">
            {!! Form::label('user_id', 'Người dùng',['class'=>'col-md-4 control-label']) !!}
            <p>{!! $device->user->full_name !!}</p>
        </div>
    </div>
    <div class="col-xs-6">
        <!-- Date Guarantee End Field -->
        <div class="form-group">
            {!! Form::label('date_guarantee_end', 'Ngày hết hạn bảo hành',['class'=>'col-md-4 control-label']) !!}
            <p>{!! $device->date_guarantee_end->format('d/m/Y') !!}</p>
        </div>

        <!-- Date Inventory Field -->
        <div class="form-group">
            {!! Form::label('date_inventory', 'Ngày kiểm kê',['class'=>'col-md-4 control-label']) !!}
            <p>{!! $device->date_inventory->format('d/m/Y') !!}</p>
        </div>

        <!-- Date Buy Field -->
        <div class="form-group">
            {!! Form::label('date_buy', 'Ngày mua',['class'=>'col-md-4 control-label']) !!}
            <p>{!! $device->date_buy->format('d/m/Y') !!}</p>
        </div>

        <!-- Device Status Id Field -->
        <div class="form-group">
            {!! Form::label('device_status_id', 'Trạng thái thiết bị',['class'=>'col-md-4 control-label']) !!}
            <p>{!! $device->status->device_status_name !!}</p>
        </div>
    </div>
</div>


