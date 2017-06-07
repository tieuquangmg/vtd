@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Danh sách tài khoản</h1>
        <h1 class="pull-right">
           <a class="btn btn-sm btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('users.create') !!}">Thêm mới</a>
			<a class="btn btn-sm btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px; margin-right: 5px" href="{!! route('users.export') !!}"><i class="glyphicon glyphicon-export"></i>Xuất Excel</a>
		</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('users.table')
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
		$(function () {
			$('#users-table').DataTable({
				"paging": true,
				"lengthChange": true,
				"searching": true,
				"ordering": true,
				"info": true,
				"autoWidth": true
			});
		});
    </script>

    @endsection

