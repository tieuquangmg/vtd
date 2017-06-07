@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Chỉnh sửa tài khoản: {{$user->full_name}}
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row ">
                   <div class="col-md-6 col-md-offset-3 col-xs-9 col-xs-offset-3">
                   {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch','class' => 'form-horizontal','files' => true]) !!}

                        @include('users.fields')

                   {!! Form::close() !!}
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection