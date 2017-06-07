@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Device Brand
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($deviceBrand, ['route' => ['deviceBrands.update', $deviceBrand->id], 'method' => 'patch']) !!}

                        @include('device_brands.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection