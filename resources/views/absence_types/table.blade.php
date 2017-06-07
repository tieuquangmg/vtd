<table class="table table-responsive" id="absenceTypes-table">
    <thead>
        <th>Absence Type Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($absenceTypes as $absenceType)
        <tr>
            <td>{!! $absenceType->absence_type_name !!}</td>
            <td>
                {!! Form::open(['route' => ['absenceTypes.destroy', $absenceType->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('absenceTypes.show', [$absenceType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('absenceTypes.edit', [$absenceType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>