@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Status
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($userStatus, ['route' => ['userStatuses.update', $userStatus->id], 'method' => 'patch']) !!}

                        @include('user_statuses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection