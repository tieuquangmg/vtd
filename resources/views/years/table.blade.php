<table class="table table-responsive" id="years-table">
    <thead>
        <th>Year Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($years as $year)
        <tr>
            <td>{!! $year->year_name !!}</td>
            <td>
                {!! Form::open(['route' => ['years.destroy', $year->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('years.show', [$year->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('years.edit', [$year->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>