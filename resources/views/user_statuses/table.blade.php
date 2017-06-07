<table class="table table-responsive" id="userStatuses-table">
    <thead>
        <th>User Status Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($userStatuses as $userStatus)
        <tr>
            <td>{!! $userStatus->user_status_name !!}</td>
            <td>
                {!! Form::open(['route' => ['userStatuses.destroy', $userStatus->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userStatuses.show', [$userStatus->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userStatuses.edit', [$userStatus->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>