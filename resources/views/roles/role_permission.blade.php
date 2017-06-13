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
                            @foreach(\App\Models\Permission_group::all() as $group)
                                <div class="box box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">{{$group->name}}</h3>
                                        <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        @foreach($group->permissions as $permission)
                                                <div class="row">
                                                    <div class="col-sm-4">{!! Form::label($permission->name,$permission->readable_name.': ') !!}</div>
                                                    <div class="col-sm-1">{!! Form::checkbox($permission->id,$permission->name, $role->existPermission($permission->name),['class'=>'flat-red']) !!}</div>
                                                </div>
                                        @endforeach
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                    </div>
                                </div>
                                @endforeach
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