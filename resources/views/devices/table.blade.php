<table id="devices-table" class="table table-responsive">
    <thead>
    <tr>
        <th>Mã thiết bị</th>
        <th>Tên thiết bị</th>
        <th>Giá tiền</th>
        <th>Người sử dụng</th>
        <th>Nhà cung cấp</th>
        <th>Sdt</th>
        {{--<th>Ngày hết bảo hành</th>--}}
        {{--<th>Ngày kiểm kê</th>--}}
        {{--<th>Ngày mua</th>--}}
        <th>Trạng thái</th>
        <th>Hành động</th>
    </tr>
    </thead>
    @foreach($devices as $device)
        <tr>
            <td>{!! $device->device_code !!}</td>
            <td>{!! $device->device_name !!}</td>
            <td>{!! $device->getFormattedDeviceMoney() !!} VND</td>
            <td>{!! $device->user()->withTrashed()->first()->full_name !!}</td>
            <td>@isset($device->supplier){!! $device->supplier->name !!} @endisset</td>
            <td>@isset($device->supplier){!! $device->supplier->sdt !!} @endisset</td>
            {{--<td>{!! $device->getDateFomated($device->date_guarantee_end) !!}</td>--}}
            {{--<td>{!! $device->getDateFomated($device->date_inventory) !!}</td>--}}
            {{--<td>{!! $device->getDateFomated($device->date_buy) !!}</td>--}}
            <td>{!! $device->status->device_status_name !!}</td>
            <td>
                {!! Form::open(['route' => ['devices.destroy', $device->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('devices.show', [$device->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('devices.edit', [$device->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
</table >