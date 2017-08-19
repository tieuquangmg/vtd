@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Thống kê</h1>
        <h1 class="pull-right">
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="userLeaves-table">
                    <thead>
                    <tr>
                        <th>Loại nghỉ phép</th>
                        <th>Năm</th>
                        <th>Tổng</th>
                        <th>Đã nghỉ</th>
                        <th>Còn lại</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $row)
                        <tr>
                            <td>{!! $row['total']->absencetype->absence_type_name !!}</td>
                            <td>{!! $row['total']->year->year_name !!}</td>
                            <td>{!! $row['total']->total_leave !!}</td>
                            <td>{!! $row['taked'] !!}</td>
                            <td>{!! $row['balance'] !!}</td>
                            <td>
                                {{--{!! Form::open(['route' => ['userLeaves.destroy', $userLeave->id], 'method' => 'delete']) !!}--}}
                                {{--<div class='btn-group'>--}}
                                {{--<a href="{!! route('userLeaves.show', [$userLeave->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                                {{--<a href="{!! route('userLeaves.edit', [$userLeave->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>--}}
                                {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                                {{--</div>--}}
                                {{--{!! Form::close() !!}--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

