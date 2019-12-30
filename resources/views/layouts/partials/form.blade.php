@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
     <div class="container col-md-4 col-md-offset-4">
 <div class="panel panel-default">
     <div class="panel-heading">Register</div>
     <div class="panel-body">
 {!! Form::open() !!}
     {!! Field::text('name') !!}
     {!! Field::email('email') !!}
     {!! Field::password('password') !!}
     {!! Field::password('password_confirmation') !!}
     {!! Form::submit('Send', ['class' => 'btn btn-success']) !!}
         {!! Form::close() !!}
             </div>
 </div>
     </div>
 </div>
    </div>
@endsection