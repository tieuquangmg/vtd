<table class="table table-responsive" id="roles-table">
    <thead>
        <th>Tên vai trò</th>
        <th colspan="3">Xem quyền</th>
    </thead>
    <tbody>
    @foreach($roles as $role)
        <tr>
            <td>{!! $role->display_name !!}</td>
            <td>
                {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
{{--                    <a href="{!! route('roles.show', [$role->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                    <a href="{!! route('role.attack.role', [$role->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
{{--                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>