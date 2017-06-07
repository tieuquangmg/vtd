<table class="table table-responsive" id="userEmployeeTypes-table">
    <thead>
        <th>User Employee Type Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($userEmployeeTypes as $userEmployeeType)
        <tr>
            <td>{!! $userEmployeeType->user_employee_type_name !!}</td>
            <td>
                {!! Form::open(['route' => ['userEmployeeTypes.destroy', $userEmployeeType->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userEmployeeTypes.show', [$userEmployeeType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userEmployeeTypes.edit', [$userEmployeeType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>