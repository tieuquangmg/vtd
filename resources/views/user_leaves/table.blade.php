<table class="table table-responsive" id="userLeaves-table">
    <thead>
    <tr>
        <th>Nhân viên</th>
        <th>Loại nghỉ phép</th>
        <th>Năm</th>
        <th>Tổng</th>
        <th>Đã nghỉ</th>
        <th>Còn lại</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($userLeaves as $userLeave)
        <tr>
            @if($loop->index == 0)
            <td rowspan="{{$userLeaves->count()}}">{!! $userLeave->user->full_name !!}</td>
            @endif
            <td>{!! $userLeave->absencetype->absence_type_name !!}</td>
            <td>{!! $userLeave->year->year_name !!}</td>
            <td>{!! $userLeave->total_leave !!}</td>
            <td>{!! $userLeave->gettaked() !!}</td>
            <td>{!! $userLeave->total_leave - $userLeave->gettaked() !!}</td>
            <td>
                {{--{!! Form::open(['route' => ['userLeaves.destroy', $userLeave->id], 'method' => 'delete']) !!}--}}
                {{--<div class='btn-group'>--}}
                    {{--<a href="{!! route('userLeaves.show', [$userLeave->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                    {{--<a href="{!! route('userLeaves.edit', [$userLeave->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>--}}
                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                {{--</div>--}}
                {{--{!! Form::close() !!}--}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>