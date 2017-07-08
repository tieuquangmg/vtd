@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Đăng ký
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'absences.store']) !!}

                    <!-- User Id Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('user_id', 'Nhân viên:') !!}
                            {!! Form::select('user_id',$userList, old('user_id'), ['class' => 'form-control'])!!}
                        </div>
                        <div class="form-group col-sm-6">
                            {!! Form::label('absence_type_id', 'Loại Nghỉ phép: ') !!}
                            {!! Form::select('absence_type_id',$absence ,old('absence_type_id'), ['class' => 'form-control']) !!}
                        </div>
                        <!-- Start Date Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('start_date', 'Ngày bắt đầu:') !!}
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                {!! Form::text('start_date', (Request::is('*edit'))? $absence->start_date->format('d/m/Y') : null, ['class' => 'form-control datepicker ']) !!}
                            </div>
                        </div>
                        <!-- Days Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('days', 'Số ngày:') !!}
                            {!! Form::number('days', null, ['class' => 'form-control']) !!}
                        </div>
                    {!! Form::hidden('user_approval_id', null, ['class' => 'form-control']) !!}
                    <!-- Absence Status Id Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('absence_status_id', 'Cập nhật trạng thái') !!}
                            {!! Form::select('absence_status_id',['1'=>'trạng thái','2'=>'Đồng ý','3'=>'Từ chối'],2, ['class' => 'form-control']) !!}
                        </div>

                        <!-- User Note Field -->
                        {{--<div class="form-group col-sm-12 col-lg-12">--}}
                            {{--{!! Form::label('user_note', 'Ghi chú:') !!}--}}
                            {{--{!! Form::textarea('user_note', null, ['class' => 'form-control','disabled'=>'disabled']) !!}--}}
                        {{--</div>--}}

                        <!-- Approval Note Field -->
                        <div class="form-group col-sm-12 col-lg-12">
                            {!! Form::label('approval_note', 'Ghi chú: ') !!}
                            {!! Form::textarea('approval_note', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Gửi', ['class' => 'btn btn-primary']) !!}
                            <a href="{!! route('absences.index') !!}" class="btn btn-danger">Hủy bỏ</a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
