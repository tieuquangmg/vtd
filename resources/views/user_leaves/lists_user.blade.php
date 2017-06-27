@extends('layouts.app')

@section('content')
	<section class="content-header">
		<h1 class="pull-left">Thống kê nghỉ phép</h1>
		<h1 class="pull-right">
			<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('users.create') !!}"></a>
		</h1>
	</section>
	<div class="content">
		<div class="clearfix"></div>

		@include('flash::message')

		<div class="clearfix"></div>
		<div class="box box-primary">
			<div class="box-body">
				<table class="table table-responsive table-striped" id="users-table">
					<thead>
					<tr>
						<th>Họ và tên</th>
						<th>Tổng số ngày nghỉ</th>
						<th>Đã nghỉ</th>
						<th>Còn lại</th>
						<th>Hành động</th>
					</tr>
					</thead>
					<tbody>
					@foreach($users as $user)
						<tr>
							<td>{!! $user->full_name !!}</td>
							<td>{!! $user->getCountById(1)['total'] !!}</td>
							<td>{!! $user->getCountById(1)['take'] !!}</td>
							<td>{!! $user->getCountById(1)['balance'] !!}</td>
							<td><a href="{{route('user.leaves.detail',$user->id)}}">Chi tiết</a></td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
	<script>
		$(function () {
			$('#users-table').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
		$(function () {
			$('#devices-table').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});

	</script>

@endsection