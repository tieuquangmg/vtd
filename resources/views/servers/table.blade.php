<table class="table table-responsive" id="servers-table">
    <thead>
        <th>Server Name</th>
        <th>Server First Link</th>
        <th>Server Second Link</th>
        <th>Server Ip</th>
        <th>Server Expire Day</th>
        <th>Server Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($servers as $server)
        <tr>
            <td>{!! $server->server_name !!}</td>
            <td>{!! $server->server_first_link !!}</td>
            <td>{!! $server->server_second_link !!}</td>
            <td>{!! $server->server_ip !!}</td>
            <td>{!! $server->server_expire_day !!}</td>
            <td>{!! $server->server_status !!}</td>
            <td>
                {!! Form::open(['route' => ['servers.destroy', $server->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('servers.show', [$server->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('servers.edit', [$server->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>