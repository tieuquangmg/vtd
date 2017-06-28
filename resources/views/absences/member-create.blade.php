@extends('layouts.app')

@section('content')
	<section class="content-header">
		<h1>
			Đăng ký nghỉ phép
		</h1>
	</section>
	<div class="content">
		@include('adminlte-templates::common.errors')
		<div class="box box-primary">
			<div class="box-body">
				<div class="row">
				{!! Form::open(['route' => 'absences.store']) !!}

				<!-- User Id Field -->
				{!! Form::hidden('user_id',Auth::user()->id, ['class' => 'form-control'])!!}

					<!-- Start Date Field -->
					<div class="form-group col-sm-6">
						{!! Form::label('start_date', 'Ngày bắt đầu:') !!}
						<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							{!! Form::text('start_date', (Request::is('*edit'))? $absence->start_date->format('d/m/Y') : null, ['class' => 'form-control datepicker ']) !!}
						</div>
					</div>
					<!-- Days Field -->
					<div class="form-group col-sm-6">
						{!! Form::label('days', 'Số ngày:') !!}
						{!! Form::number('days', null, ['class' => 'form-control']) !!}
					</div>
					<!-- User Note Field -->
					<div class="form-group col-sm-12 col-lg-12">
						{!! Form::label('user_note', 'Ghi chú:') !!}
						{!! Form::textarea('user_note', null, ['class' => 'form-control']) !!}
					</div>

					<!-- Submit Field -->
					<div class="form-group col-sm-12">
						{!! Form::submit('Gửi', ['class' => 'btn btn-primary']) !!}
						<a href="{!! route('absences.index') !!}" class="btn btn-default">Hủy bỏ</a>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection
