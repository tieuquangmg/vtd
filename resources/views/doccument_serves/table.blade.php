<table class="table table-responsive" id="doccumentServes-table">
    <thead>
        <th>Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($doccumentServes as $doccumentServe)
        <tr>
            <td>{!! $doccumentServe->name !!}</td>
            <td>
                {!! Form::open(['route' => ['doccumentServes.destroy', $doccumentServe->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('doccumentServes.show', [$doccumentServe->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('doccumentServes.edit', [$doccumentServe->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>