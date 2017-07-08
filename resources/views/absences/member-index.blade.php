@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Đơn xin nghỉ phép</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('absences.create') !!}">Thêm mới</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="absences-table">
                    <thead>
                    <tr>
                        <th>Ngày bắt đầu</th>
                        <th>Loại nghỉ phép</th>
                        <th>Số ngày</th>
                        <th>Ghi chú</th>
                        <th>Trạng thái</th>
                        <th>Người phê duyệt</th>
                        <th>Người phê duyệt note</th>
                        <th colspan="3">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($absences as $absence)
                        <tr>
                            <td>{!! $absence->start_date->format('d/m/Y') !!}</td>
                            <td>{!! $absence->AbsenceType->absence_type_name !!}</td>
                            <td>{!! $absence->days !!}</td>
                            <td>{!! $absence->user_note !!}</td>
                            <td>{!! $absence->status->absence_status_name !!}</td>
                            <td>{!! ($absence->user_approval != null)?($absence->user_approval->full_name):'' !!}</td>
                            <td>{!! $absence->approval_note !!}</td>
                            <td>
                                {!! Form::open(['route' => ['absences.destroy', $absence->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{!! route('absences.show', [$absence->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>Hủy', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('bạn muốn hủy?')"]) !!}
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection