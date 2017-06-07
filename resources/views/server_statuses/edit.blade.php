@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Server Status
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($serverStatus, ['route' => ['serverStatuses.update', $serverStatus->id], 'method' => 'patch']) !!}

                        @include('server_statuses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection