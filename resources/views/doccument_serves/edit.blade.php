@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Doccument Serve
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($doccumentServe, ['route' => ['doccumentServes.update', $doccumentServe->id], 'method' => 'patch']) !!}

                        @include('doccument_serves.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection