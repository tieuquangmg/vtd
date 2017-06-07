<table class="table table-responsive" id="userRanks-table">
    <thead>
        <th>User Rank Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($userRanks as $userRank)
        <tr>
            <td>{!! $userRank->user_rank_name !!}</td>
            <td>
                {!! Form::open(['route' => ['userRanks.destroy', $userRank->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userRanks.show', [$userRank->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userRanks.edit', [$userRank->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>