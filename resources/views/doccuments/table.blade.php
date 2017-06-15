<table class="table table-responsive" id="doccuments-table">
    <thead>
        <th>Tên tài liệu</th>
        <th>Link</th>
        <th>Server</th>
        <th colspan="3">Hành động</th>
    </thead>
    <tbody>
    @foreach($doccuments as $doccuments)
        <tr>
            <td>{!! $doccuments->name !!}</td>
            <td><a href="{{$doccuments->link}}">{{ str_limit($doccuments->link,30, $end = '...') }}</a></td>
            <td>{!! $doccuments->serve !!}</td>
            <td>
                {!! Form::open(['route' => ['doccuments.destroy', $doccuments->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('doccuments.show', [$doccuments->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('doccuments.edit', [$doccuments->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>