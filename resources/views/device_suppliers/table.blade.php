<table class="table table-responsive" id="deviceSuppliers-table">
    <thead>
        <th>Name</th>
        <th>Sdt</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($deviceSuppliers as $deviceSupplier)
        <tr>
            <td>{!! $deviceSupplier->name !!}</td>
            <td>{!! $deviceSupplier->sdt !!}</td>
            <td>
                {!! Form::open(['route' => ['deviceSuppliers.destroy', $deviceSupplier->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('deviceSuppliers.show', [$deviceSupplier->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('deviceSuppliers.edit', [$deviceSupplier->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>