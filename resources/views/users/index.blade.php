@extends('layouts.app')
@section('css')
	<link type="text/css" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" rel="stylesheet" />
	<link type="text/css" href="{{asset('/')}}themes/plugins/multiselect/ui.multiselect.css" rel="stylesheet" />
	<style>
		.multiselect {
			width: 550px;
			height: 500px !important;
		}
	</style>
	@endsection
@section('content')
	<section class="content-header">
		<h1 class="pull-left">Danh sách tài khoản</h1>
		<h1 class="pull-right">
			<a class="btn btn-sm btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px"
			   href="{!! route('users.create') !!}">Thêm mới</a>
			{{--<a class="btn btn-sm btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px; margin-right: 5px"--}}
			   {{--href="{!! route('users.export') !!}">--}}
				{{--<i class="glyphicon glyphicon-export"></i>Xuất Excel</a>--}}
			<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Xuất Excel</button>
		</h1>
	</section>
	<div class="content">
		<div class="clearfix"></div>
		@include('flash::message')
		<div class="clearfix"></div>
		<div class="box box-primary">
			<div class="box-header">
				<div class="pull-left">
					<form method="post" action="{{route('sendemail')}}" id="email">
						{!! csrf_field() !!}
						<input class="btn btn-danger btn-sm" type="submit" value="gửi email">
					</form>
				</div>
			</div>
			<div class="box-body">
				@include('users.table')
			</div>
		</div>
	</div>
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Chọn cột</h4>
				</div>
				<div class="modal-body">
					<form method="post" action="{{route('users.export')}}">
						<select id="countries" class="multiselect" multiple="multiple" name="colums[]" title="chọn colum">
							<option value="id">ID</option>
							<option value="full_name">Họ và tên</option>
							<option value="email">Địa chỉ email</option>
						</select>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal"><i class="glyphicon glyphicon-export"></i>Tải xuống</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
	{{--<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js"></script>--}}
	<script
			src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
			integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
			crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{asset('/')}}themes/plugins/multiselect/plugins/localisation/jquery.localisation-min.js"></script>
	<script type="text/javascript" src="{{asset('/')}}themes/plugins/multiselect/ui.multiselect.js"></script>

	<script type="text/javascript">
        $(function(){
            $.localise('ui-multiselect');
            $(".multiselect").multiselect();
        });
	</script>
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

