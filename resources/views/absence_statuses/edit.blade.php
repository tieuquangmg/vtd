@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Absence Status
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($absenceStatus, ['route' => ['absenceStatuses.update', $absenceStatus->id], 'method' => 'patch']) !!}

                        @include('absence_statuses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection