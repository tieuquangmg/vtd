@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Rank
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($userRank, ['route' => ['userRanks.update', $userRank->id], 'method' => 'patch']) !!}

                        @include('user_ranks.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection