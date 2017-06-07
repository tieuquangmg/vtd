<table class="table table-responsive" id="serverStatuses-table">
    <thead>
        <th>Server Status Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($serverStatuses as $serverStatus)
        <tr>
            <td>{!! $serverStatus->server_status_name !!}</td>
            <td>
                {!! Form::open(['route' => ['serverStatuses.destroy', $serverStatus->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('serverStatuses.show', [$serverStatus->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('serverStatuses.edit', [$serverStatus->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>