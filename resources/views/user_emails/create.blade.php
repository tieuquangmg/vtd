@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h2>
            Gửi email
        </h2>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'send.email']) !!}

                        @include('user_emails.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{asset('/')}}themes/plugins/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'ckeditor' );
    </script>
    @endsection
