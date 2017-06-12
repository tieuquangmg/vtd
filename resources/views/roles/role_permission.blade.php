@extends('layouts.app')

@section('content')
	<section class="content-header">
		<h1>
			{{$role->display_name}} permission
		</h1>
	</section>
	<div class="content">
		@include('adminlte-templates::common.errors')
		<div class="box box-primary">
			<div class="box-body">
				<div class="row">
					{!! Form::model(null, ['route' => ['role.attack.role', $role->id], 'method' => 'post']) !!}
					@foreach($permissions as $permission)
						<div class="form-group col-sm-6 col-sm-offset-3">
							{!! Form::label($permission->name,$permission->readable_name.': ') !!}
							{!! Form::checkbox($permission->id,$permission->name, $role->existPermission($permission->name)) !!}
						</div>
					@endforeach
					{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection