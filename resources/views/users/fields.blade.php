<!-- Full Name Field -->
<div class="form-group">
    {!! Form::label('full_name', 'Họ và tên:',['class'=>'col-md-3']) !!}
    {!! Form::text('full_name', null, ['class' => 'col-md-6']) !!}
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Tên đăng nhập:',['class'=>'col-md-3']) !!}
    {!! Form::text('name', null, ['class' => 'col-md-6']) !!}
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Mật khẩu:',['class'=>'col-md-3']) !!}
    {!! Form::password('password', ['class' => 'col-md-6']) !!}
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:',['class'=>'col-md-3']) !!}
    {!! Form::email('email', null, ['class' => 'col-md-6']) !!}
</div>

<!-- Sdt Field -->
<div class="form-group">
    {!! Form::label('sdt', 'Sdt:',['class'=>'col-md-3']) !!}
    {!! Form::text('sdt', null, ['class' => 'col-md-6']) !!}
</div>

<div class="form-group">
    {!! Form::label('address', 'Địa chỉ:',['class'=>'col-md-3']) !!}
    {!! Form::text('address', null, ['class' => 'col-md-6']) !!}
</div>

<div class="form-group">
    {!! Form::label('permanent_address', 'Địa chỉ thường chú: ',['class'=>'col-md-3']) !!}
    {!! Form::text('permanent_address', null, ['class' => 'col-md-6']) !!}
</div>

<!-- Start Date Field -->
<div class="form-group">
    {!! Form::label('start_date', 'Ngày bắt đầu:',['class'=>'col-md-3']) !!}
    <div class="input-group date col-md-6">
        <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </div>
        {!! Form::text('start_date', (Request::is('*edit'))? $user->start_date->format('d/m/Y') : null, ['class' => 'form-control datepicker','id'=>'datepicker']) !!}
    </div>
</div>
{{--Ngày hết hạn hợp đồng--}}
<div class="form-group">
    {!! Form::label('contract_date_end', 'Ngày hết hạn hợp đồng',['class'=>'col-md-3']) !!}
    <div class="input-group date col-md-6">
        <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </div>
        {!! Form::text('contract_date_end', (Request::is('*edit') && $user->contract_date_end != null)? $user->contract_date_end->format('d/m/Y') : null, ['class' => 'form-control datepicker','id'=>'datepicker']) !!}
    </div>
</div>

{{--Hợp đồng--}}
<div class="form-group">
    {!! Form::label('contract_file', 'Hợp đồng',['class'=>'col-md-3']) !!}
    <div class="input-group">
        {!! Form::file('contract_file', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- User Employee Type Id Field -->
<div class="form-group">
    {!! Form::label('user_employee_type_id', 'Loại:',['class'=>'col-md-3']) !!}
    {!! Form::select('user_employee_type_id',$listUserType, old('user_employee_type_id'), ['class' => 'col-md-6'])!!}
</div>

<!-- User Rank Id Field -->
<div class="form-group">
    {!! Form::label('user_rank_id', 'Rank:',['class'=>'col-md-3']) !!}
    {!! Form::select('user_rank_id',$listUserRank, old('user_rank_id'), ['class' => 'col-md-6'])!!}
</div>

<!-- User Status Id Field -->
<div class="form-group">
    {!! Form::label('user_status_id', 'Trạng thái:',['class'=>'col-md-3']) !!}
    {!! Form::select('user_status_id',$listUserStatus, old('user_status_id'), ['class' => 'col-md-6'])!!}
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('bank_acc', 'Số tài khoản:',['class'=>'col-md-3']) !!}
    {!! Form::text('bank_acc', null, ['class' => 'col-md-6']) !!}
</div>

<div class="form-group">
    {!! Form::label('roles', 'Loại tài khoản',['class'=>'col-md-3']) !!}
    {!! Form::select('roles[]', $listRoles, null, ['multiple'=>true,'class' => 'col-md-6']) !!}
</div>
<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit( Request::is('*edit')? 'Cập nhật' : 'Tạo tài khoản', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-danger">Hủy</a>
</div>



