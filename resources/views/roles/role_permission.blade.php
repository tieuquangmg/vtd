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
						<div class="form-group col-sm-7 ">
							<div class="box box-default">
								<div class="box-header with-border">
									<h3 class="box-title">Tài khoản</h3>
									<div class="box-tools pull-right">
										<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
									</div>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
									<table>
										@foreach($permissions as $permission)
											<tr>
												<td>{!! Form::label($permission->name,$permission->readable_name.': ') !!}</td>
												<td>{!! Form::checkbox($permission->id,$permission->name, $role->existPermission($permission->name),['class'=>'flat-red']) !!}</td>
											</tr>
										@endforeach
									</table>
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
								</div>
							</div>
						</div>
					<div class="col-sm-12">
						{!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection