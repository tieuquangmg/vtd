@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Doccuments
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($doccuments, ['route' => ['doccuments.update', $doccuments->id], 'method' => 'patch']) !!}

                        @include('doccuments.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection