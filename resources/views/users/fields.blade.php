<div class="col-md-6 col-sm-12">
    <!-- Full Name Field -->
    <div class="form-group">
        {!! Form::label('full_name', 'Họ và tên:',['class'=>'col-md-3 col-xs-4 required-input']) !!}
        {!! Form::text('full_name', null, ['class' => 'col-md-6 col-xs-8']) !!}
    </div>

    <!-- Name Field -->
    <div class="form-group">
        {!! Form::label('name', 'Tên đăng nhập:',['class'=>'col-md-3 col-xs-4 required-input']) !!}
        {!! Form::text('name', null, ['class' => 'col-md-6 col-xs-8']) !!}
    </div>

    <!-- Password Field -->
    <div class="form-group">
        {!! Form::label('password', 'Mật khẩu:',['class'=>'col-md-3 col-xs-4 required-input']) !!}
        {!! Form::password('password', ['class' => 'col-md-6 col-xs-8']) !!}
    </div>

    <!-- Email Field -->
    <div class="form-group">
        {!! Form::label('email', 'Email:',['class'=>'col-md-3 col-xs-4 required-input']) !!}
        {!! Form::email('email', null, ['class' => 'col-md-6 col-xs-8']) !!}
    </div>

    <!-- Sdt Field -->
    <div class="form-group">
        {!! Form::label('sdt', 'Sdt:',['class'=>'col-md-3 col-xs-4']) !!}
        {!! Form::text('sdt', null, ['class' => 'col-md-6 col-xs-8']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address', 'Địa chỉ:',['class'=>'col-md-3 col-xs-4']) !!}
        {!! Form::text('address', null, ['class' => 'col-md-6 col-xs-8']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('permanent_address', 'Địa chỉ thường chú: ',['class'=>'col-md-3 col-xs-4']) !!}
        {!! Form::text('permanent_address', null, ['class' => 'col-md-6 col-xs-8']) !!}
    </div>

    <!-- Start Date Field -->
    <div class="form-group">
        {!! Form::label('start_date', 'Ngày bắt đầu:',['class'=>'col-md-3 col-xs-4 required-input']) !!}
        <div class="input-group date col-md-6 col-xs-8">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            {!! Form::text('start_date', (Request::is('*edit'))? $user->start_date->format('d/m/Y') : null, ['class' => 'form-control datepicker','id'=>'datepicker']) !!}
        </div>
    </div>
    {{--Ngày hết hạn hợp đồng--}}
    <div class="form-group">
        {!! Form::label('contract_date_end', 'Ngày hết hạn hợp đồng',['class'=>'col-md-3 col-xs-4']) !!}
        <div class="input-group date col-md-6 col-xs-8">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            {!! Form::text('contract_date_end', (Request::is('*edit') && $user->contract_date_end != null)? $user->contract_date_end->format('d/m/Y') : null, ['class' => 'form-control datepicker','id'=>'datepicker']) !!}
        </div>
    </div>
    {{--Hợp đồng--}}
    <div class="form-group">
        {!! Form::label('contract_file', 'Hợp đồng',['class'=>'col-md-3 col-xs-4']) !!}
        <div class="input-group">
            {!! Form::file('contract_file', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <!-- User Employee Type Id Field -->
    <div class="form-group">
        {!! Form::label('user_employee_type_id', 'Loại:',['class'=>'col-md-3 col-xs-4']) !!}
        {!! Form::select('user_employee_type_id',$listUserType, old('user_employee_type_id'), ['class' => 'col-md-6 col-xs-8'])!!}
    </div>

    <!-- User Rank Id Field -->
    <div class="form-group">
        {!! Form::label('user_rank_id', 'Rank:',['class'=>'col-md-3 col-xs-4']) !!}
        {!! Form::select('user_rank_id',$listUserRank, old('user_rank_id'), ['class' => 'col-md-6 col-xs-8'])!!}
    </div>
</div>
<div class="col-md-6 col-xs-12">


    <!-- User Status Id Field -->
    <div class="form-group">
        {!! Form::label('user_status_id', 'Trạng thái:',['class'=>'col-md-3 col-xs-4']) !!}
        {!! Form::select('user_status_id',$listUserStatus, old('user_status_id'), ['class' => 'col-md-6 col-xs-8'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('roles', 'Loại tài khoản',['class'=>'col-md-3 col-xs-4 required-input']) !!}
        {!! Form::select('roles[]', $listRoles, Request::is('*edit')? $user_roles : old('roles'), ['multiple'=>true,'class' => 'col-md-6 col-xs-8']) !!}
    </div>
    {{--ngày sinh--}}
    <div class="form-group">
        {!! Form::label('birthday', 'Ngày sinh:',['class'=>'col-md-3 col-xs-4']) !!}
        <div class="input-group date col-md-6 col-xs-8">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            {!! Form::text('birthday', (Request::is('*edit') && $user->birthday != null)? $user->birthday->format('d/m/Y') : null, ['class' => 'form-control datepicker','id'=>'datepicker']) !!}
        </div>
    </div>
    {{--so cmt--}}
    <div class="form-group">
        {!! Form::label('card_id', 'Số CMT:',['class'=>'col-md-3 col-xs-4']) !!}
        {!! Form::text('card_id', null, ['class' => 'col-md-6 col-xs-8']) !!}
    </div>
    {{--ngày cấp--}}
    <div class="form-group">
        {!! Form::label('card_date', 'Ngày cấp:',['class'=>'col-md-3 col-xs-4']) !!}
        <div class="input-group date col-md-6 col-xs-8">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            {!! Form::text('card_date', (Request::is('*edit') && $user->card_date != null)? $user->card_date->format('d/m/Y') : null, ['class' => 'form-control datepicker','id'=>'datepicker']) !!}
        </div>
    </div>
    {{--nơi cấp--}}
    <div class="form-group">
        {!! Form::label('card_location', 'Nơi cấp',['class'=>'col-md-3 col-xs-4']) !!}
        {!! Form::text('card_location', null, ['class' => 'col-md-6 col-xs-8']) !!}
    </div>
    {{--số thẻ--}}
    <div class="form-group">
        {!! Form::label('bank_acc', 'Số tài khoản:',['class'=>'col-md-3 col-xs-4']) !!}
        {!! Form::text('bank_acc', null, ['class' => 'col-md-6 col-xs-8']) !!}
    </div>
    {{--Loại ngân hàng--}}
    <div class="form-group">
        {!! Form::label('bank_id', 'Loại ngân hàng:',['class'=>'col-md-3 col-xs-4']) !!}
        {!! Form::select('bank_id', $listBank, old('bank_id'), ['class' => 'col-md-6 col-xs-8']) !!}
    </div>
    {{--chi nhánh--}}
    <div class="form-group">
        {!! Form::label('bank_location', 'Chi nhánh',['class'=>'col-md-3 col-xs-4']) !!}
        {!! Form::text('bank_location', null, ['class' => 'col-md-6 col-xs-8']) !!}
    </div>
    {{--lương--}}
    <div class="form-group">
        {!! Form::label('salary', 'Lương: ',['class'=>'col-md-3 col-xs-4']) !!}
        {!! Form::number('salary', null, ['class' => 'col-md-6 col-xs-8']) !!}
    </div>
    {{--số xe--}}
    <div class="form-group">
        {!! Form::label('bike_no', 'Số xe: ',['class'=>'col-md-3 col-xs-4']) !!}
        {!! Form::number('bike_no', null, ['class' => 'col-md-6 col-xs-8']) !!}
    </div>
</div>