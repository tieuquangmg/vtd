<table class="table table-responsive" id="userEmails-table">
    <thead>
        <th>User Id</th>
        <th>Email To User Id</th>
        <th>Content</th>
        <th>Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($userEmails as $userEmail)
        <tr>
            <td>{!! $userEmail->user_id !!}</td>
            <td>{!! $userEmail->email_to_user_id !!}</td>
            <td>{!! $userEmail->content !!}</td>
            <td>{!! $userEmail->status !!}</td>
            <td>
                {!! Form::open(['route' => ['userEmails.destroy', $userEmail->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userEmails.show', [$userEmail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userEmails.edit', [$userEmail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>