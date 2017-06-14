@extends('layouts.app')

@section('content')
	<section class="content-header">
		<h1>
			Chỉnh sửa tài khoản: {{$user->full_name}}
		</h1>
	</section>
	<div class="content">
		@include('adminlte-templates::common.errors')
		{!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch','class' => 'form-horizontal','files' => true]) !!}

		<div class="box box-primary">
			<div class="box-header">
				<div class="pull-right">
					<!-- Submit Field -->
					<div class="form-group">
						{!! Form::submit( Request::is('*edit')? 'Cập nhật' : 'Tạo tài khoản', ['class' => 'btn btn-primary']) !!}
						<a href="{!! route('users.index') !!}" class="btn btn-danger">Hủy</a>
					</div>
				</div>
			</div>
			<div class="box-body">
				@include('users.fields')
			</div>
		</div>
		{!! Form::close() !!}

	</div>
@endsection