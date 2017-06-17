@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Email
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($userEmail, ['route' => ['userEmails.update', $userEmail->id], 'method' => 'patch']) !!}

                        @include('user_emails.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection