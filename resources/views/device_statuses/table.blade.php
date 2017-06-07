<table class="table table-responsive" id="deviceStatuses-table">
    <thead>
        <th>Device Status Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($deviceStatuses as $deviceStatus)
        <tr>
            <td>{!! $deviceStatus->device_status_name !!}</td>
            <td>
                {!! Form::open(['route' => ['deviceStatuses.destroy', $deviceStatus->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('deviceStatuses.show', [$deviceStatus->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('deviceStatuses.edit', [$deviceStatus->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>