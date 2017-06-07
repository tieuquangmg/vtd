@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tạo tài khoản mới
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        {!! Form::open(['route' => 'users.store','class' => 'form-horizontal','files' => true]) !!}

                        @include('users.fields')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
