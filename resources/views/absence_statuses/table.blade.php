<table class="table table-responsive" id="absenceStatuses-table">
    <thead>
        <th>Absence Status Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($absenceStatuses as $absenceStatus)
        <tr>
            <td>{!! $absenceStatus->absence_status_name !!}</td>
            <td>
                {!! Form::open(['route' => ['absenceStatuses.destroy', $absenceStatus->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('absenceStatuses.show', [$absenceStatus->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('absenceStatuses.edit', [$absenceStatus->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>