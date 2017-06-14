<table class="table table-responsive table-striped" id="users-table">
    <thead>
    <tr>
        <th>
            <input type="checkbox" id="check_all">
        </th>
        <th>Họ và tên</th>
        <th>Tên đăng nhập</th>
        {{--<th>Email</th>--}}
        <th>Quyền người dùng</th>
        <th>Số điện thoại</th>
        <th>Start Date</th>
        <th>Ngày hết hợp đồng</th>
        <th>Loại Nhân viên</th>
        <th>Rank</th>
        <th>Trạng thái</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td class="a-center">
                <input form="email" type="checkbox" class="check" name="check[]" value="{{$user->id}}">
            </td>
            <td><b><a href="{!! route('users.show', [$user->id]) !!}">{!! $user->full_name !!}</a></b></td>
            <td>{!! $user->name !!}</td>
            {{--<td>{!! $user->email !!}</td>--}}
            <td>
                @foreach($user->roles as $role)
                    <span style="color: red">{!! $role->display_name !!}</span><br>
                    @endforeach
            </td>
            <td>{!! $user->sdt !!}</td>
            <td>{!! ($user->start_date != null) ? ($user->start_date->format('d/m/Y')) : "" !!}</td>
            <td>{{  ($user->contract_date_end != null) ? ($user->contract_date_end->format('d/m/Y')) : ""}}</td>
            <td>{!! $user->employee->user_employee_type_name !!}</td>
            <td>{!! $user->rank->user_rank_name !!}</td>
            <td>{!! $user->status->user_status_name !!}</td>
            <td>
                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {{--<a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i--}}
                                {{--class="glyphicon glyphicon-eye-open"></i></a>--}}
                    <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-edit"></i></a>
                    <a href="{!! route('user.attack.permission', [$user->id]) !!}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-bitcoin"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>