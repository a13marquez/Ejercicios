@extends('default')

@section('titulo')
  Iniciar Sesion
@stop

@section('contenido')
  <div class="container">
    <h1>Iniciar Sesión</h1>
    {{Form::open(array('url'=>'login'))}}<br>
      {{Form::label('email', 'E-mail:')}}{{Form::email('email', null,array('class'=>'form-control'))}}<br>
      {{Form::label('pass', 'Contraseña')}}{{Form::password('pass', array('class'=>'form-control'))}}<br>
      {{Form::checkbox('recordar')}}&nbsp;{{Form::label('recordar', 'Mantener sesión iniciada')}}<br>
      {{Form::submit('Iniciar sesión', array('class'=>'btn btn-primary'))}}
    {{Form::close()}}
  </div>
@endsection
