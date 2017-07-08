<table class="table table-responsive" id="absences-table">
    <thead>
    <tr>
        <th>Nhân viên</th>
        <th>Ngày bắt đầu</th>
        <th>Số ngày</th>
        <th>Người phê duyệt</th>
        <th>Trạng thái</th>
        <th>Ghi chú</th>
        <th>Người phê duyệt note</th>
        <th colspan="3">Hành động</th>
    </tr>
    </thead>
    <tbody>
    @foreach($absences as $absence)
        <tr>
            <td>{!! $absence->user->full_name !!}</td>
            <td>{!! $absence->start_date->format('d/m/Y') !!}</td>
            <td>{!! $absence->days !!}</td>
            <td>{!! ($absence->user_approval != null)?($absence->user_approval->full_name):'' !!}</td>
            <td style="color: {{($absence->status->id == 3)? "red": (($absence->status->id == 2)? "green": "")}}">{!! $absence->status->absence_status_name !!}</td>
            <td>{!! $absence->user_note !!}</td>
            <td>{!! $absence->approval_note !!}</td>
            <td>
                {!! Form::open(['route' => ['absences.destroy', $absence->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('absences.show', [$absence->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('absences.edit', [$absence->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>Hủy', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>