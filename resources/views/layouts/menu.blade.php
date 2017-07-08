
<li class="{{ Request::is('randrom-user*') ? 'active' : '' }}">
    <a href="{!! route('users.ranrom-users') !!}"><i class="fa fa-edit"></i><span>Random</span></a>
</li>
@is(['member'])
<li class="treeview <?php if (Request::is('users*') or Request::is('addUser*') or Request::is('userEmployeeTypes*') or Request::is('userRanks*') or Request::is('userStatuses*')) echo "active"; ?>">
    <a href="http://wiki.vtdvn.net/">
        <i class="fa fa-dashboard"></i>
        <span>Vtd Wiki</span>
    </a>
</li>
<li class="treeview <?php if (Request::is('users*') or Request::is('addUser*') or Request::is('userEmployeeTypes*') or Request::is('userRanks*') or Request::is('userStatuses*')) echo "active"; ?>">
    <a href="http://forum.vtdvn.net">
        <i class="fa fa-dashboard"></i>
        <span>Forum</span>
    </a>
</li>
@endis
@is(['admin'])
<li class="treeview <?php if (Request::is('doccuments*') or Request::is('doccumentServes')) echo "active"; ?>">
    <a href="#">
        <i class="fa fa-dashboard"></i>
        <span>Quản lý tài liệu</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('doccuments*') ? 'active' : '' }}">
            <a href="{!! route('doccuments.index') !!}"><i class="fa fa-edit"></i><span>Danh sách</span></a>
        </li>
        <li class="{{ Request::is('addUser*') ? 'active' : '' }}">
            <a href="{!! route('users.create') !!}"><i class="fa fa-edit"></i><span>Tạo tài liệu mới</span></a>
        </li>
        <li class="{{ Request::is('doccumentServes*') ? 'active' : '' }}">
            <a href="{!! route('doccumentServes.index') !!}"><i class="fa fa-edit"></i><span>Danh sách Server</span></a>
        </li>
    </ul>
</li>
@endis
@is(['admin'])
    <li class="treeview <?php if (Request::is('users*') or Request::is('addUser*') or Request::is('userEmployeeTypes*') or Request::is('userRanks*') or Request::is('userStatuses*')) echo "active"; ?>">
    <a href="#">
        <i class="fa fa-dashboard"></i>
        <span>Quản lý tài khoản</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('users*') ? 'active' : '' }}">
            <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Danh sách</span></a>
        </li>
        <li class="{{ Request::is('addUser*') ? 'active' : '' }}">
            <a href="{!! route('users.create') !!}"><i class="fa fa-edit"></i><span>Tạo tài khoản mới</span></a>
        </li>
        <li class="{{ Request::is('userEmployeeTypes*') ? 'active' : '' }}">
            <a href="{!! route('userEmployeeTypes.index') !!}"><i class="fa fa-edit"></i><span>Loại nhân viên</span></a>
        </li>
        <li class="{{ Request::is('userRanks*') ? 'active' : '' }}">
            <a href="{!! route('userRanks.index') !!}"><i class="fa fa-edit"></i><span>Rank nhân viên</span></a>
        </li>
        <li class="{{ Request::is('userStatuses*') ? 'active' : '' }}">
            <a href="{!! route('userStatuses.index') !!}"><i
                        class="fa fa-edit"></i><span>Trạng thái nhân viên</span></a>
        </li>
        <li class="{{ Request::is('banks*') ? 'active' : '' }}">
            <a href="{!! route('banks.index') !!}"><i class="fa fa-edit"></i><span>Banks</span></a>
        </li>
        <li class="{{ Request::is('userEmails*') ? 'active' : '' }}">
            <a href="{!! route('userEmails.index') !!}"><i class="fa fa-edit"></i><span>User_emails</span></a>
        </li>
    </ul>
</li>
@else
    <li class="{{ Request::is('users*') ? 'active' : '' }}">
        <a href="{!! route('users.show', [Auth::user()->id]) !!}"><i class="fa fa-edit"></i><span>Thông tin cá nhân</span></a>
    </li>
@endis
    @is(['admin'])
<li class="treeview <?php if (Request::is('devices*') or Request::is('devices/create*') or Request::is('deviceStatuses*') or Request::is('deviceSuppliers*') or Request::is('deviceBrands*')) echo "active"; ?>">
    <a href="#">
        <i class="fa fa-dashboard"></i>
        <span>Quản lý thiết bị</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('devices') ? 'active' : '' }}">
            <a href="{!! route('devices.index') !!}"><i class="fa fa-edit"></i><span>Danh sách</span></a>
        </li>
        <li class="{{ Request::is('devices/create*') ? 'active' : '' }}">
            <a href="{!! route('devices.create') !!}"><i class="fa fa-edit"></i><span>Thêm mới thiết bị</span></a>
        </li>
        <li class="{{ Request::is('deviceStatuses*') ? 'active' : '' }}">
            <a href="{!! route('deviceStatuses.index') !!}"><i
                        class="fa fa-edit"></i><span>Trang thái thiết bị</span></a>
        </li>
        <li class="{{ Request::is('deviceSuppliers*') ? 'active' : '' }}">
            <a href="{!! route('deviceSuppliers.index') !!}"><i class="fa fa-edit"></i><span>Nhà cung cấp</span></a>
        </li>
        <li class="{{ Request::is('deviceBrands*') ? 'active' : '' }}">
            <a href="{!! route('deviceBrands.index') !!}"><i class="fa fa-edit"></i><span>Hãng sản xuất</span></a>
        </li>
    </ul>
</li>
<li>
    <a href="#">
        <i class="fa fa-dashboard"></i> <span>Infra</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu" style="display: none;">
        <li class="{{ Request::is('servers*') ? 'active' : '' }}">
            <a href="{!! route('servers.index') !!}"><i class="fa fa-edit"></i><span>Danh sách</span></a>
        </li>
        <li class="{{ Request::is('serverStatuses*') ? 'active' : '' }}">
            <a href="{!! route('serverStatuses.index') !!}"><i class="fa fa-edit"></i><span>Trạng thái server</span></a>
        </li>
    </ul>
</li>
<li>
    <a href="#">
        <i class="fa fa-dashboard"></i>
        <span>Hồ sơ</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu" style="display: none;">
        <li class="{{ Request::is('servers*') ? 'active' : '' }}">
            <a href="{!! route('servers.index') !!}"><i class="fa fa-edit"></i><span>Thông tin cá nhân</span></a>
        </li>
        <li class="{{ Request::is('servers*') ? 'active' : '' }}">
            <a href="{!! route('servers.index') !!}"><i class="fa fa-edit"></i><span>Số ngày phép</span></a>
        </li>
    </ul>
</li>
    @endis
    @is(['admin'])
<li class="treeview <?php if (Request::is('absences/create*') or Request::is('absences') or Request::is('absenceTypes*') or Request::is('absenceStatuses*') or Request::is('userDetails*') or Request::is('years*')) echo "active"; ?>">
    <a href="#">
        <i class="fa fa-dashboard"></i>
        <span>Quản lý Nghỉ phép</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('absences/create*') ? 'active' : '' }}">
            <a href="{!! route('absences.create') !!}"><i class="fa fa-edit"></i><span>Đăng ký nghỉ phép</span></a>
        </li>
        <li class="{{ Request::is('absences') ? 'active' : '' }}">
            <a href="{!! route('absences.index') !!}"><i class="fa fa-edit"></i><span>Danh sách xin nghỉ</span></a>
        </li>

        <li class="{{ Request::is('absenceTypes*') ? 'active' : '' }}">
            <a href="{!! route('absenceTypes.index') !!}"><i class="fa fa-edit"></i><span>Loại nghỉ phép</span></a>
        </li>

        <li class="{{ Request::is('absenceStatuses*') ? 'active' : '' }}">
            <a href="{!! route('absenceStatuses.index') !!}"><i class="fa fa-edit"></i><span>Trạng thái xin nghỉ</span></a>
        </li>

        <li class="{{ Request::is('userDetails*') ? 'active' : '' }}">
            <a href="{!! route('userdetails.leave') !!}"><i class="fa fa-edit"></i><span>Thống kê</span></a>
        </li>

        <li class="{{ Request::is('years*') ? 'active' : '' }}">
            <a href="{!! route('years.index') !!}"><i class="fa fa-edit"></i><span>Năm</span></a>
        </li>
    </ul>
</li>
    @endis
    @is(['member'])
    <li class="treeview <?php if (Request::is('showmemberLeaves*') or Request::is('absences/all/member*') or Request::is('absences/create/member*')) echo "active"; ?>">
        <a href="#">
            <i class="fa fa-dashboard"></i>
            <span>Quản lý Nghỉ phép</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('absences/create/member*') ? 'active' : '' }}">
                <a href="{!! route('absences.membercreate') !!}"><i class="fa fa-edit"></i><span>Đăng ký mới</span></a>
            </li>
            <li class="{{ Request::is('absences/all/member*') ? 'active' : '' }}">
                <a href="{!! route('absences.all.member') !!}"><i class="fa fa-edit"></i><span>Danh sách đơn xin nghỉ</span></a>
            </li>
            <li class="{{ Request::is('userDetails*') ? 'active' : '' }}">
                <a href="{!! route('member.leaves.detail') !!}"><i class="fa fa-edit"></i><span>Thống kê</span></a>
            </li>
        </ul>
    </li>

    @endis
    @is(['admin'])
    <li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
    </li>
    @endis
