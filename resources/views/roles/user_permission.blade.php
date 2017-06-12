@extends('layouts.app')

@section('content')
	<section class="content-header">
		<h1>
			Phân quyền cho thành viên {{$user->full_name}}:
		</h1>
	</section>
	<div class="content">
		@include('adminlte-templates::common.errors')
		<div class="box box-primary">
			<div class="box-body">
				<div class="row">
					{!! Form::model(null, ['route' => ['user.attack.permission', $user->id ], 'method' => 'post']) !!}
					@foreach($permissions as $permission)
						<div class="form-group col-sm-6 col-sm-offset-3">
							{!! Form::label($permission->name,$permission->readable_name.': ') !!}
							<label>
								{!! Form::checkbox('per['.$permission->id.']',1,$user->existPermission($permission->name),['class'=>'flat-red']) !!}
							</label>
						</div>
					@endforeach
					{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection