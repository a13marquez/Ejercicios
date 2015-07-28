@extends('default')

@section('titulo')
  Crear usuario
@stop

@section('contenido')
    <div class="container">
      <h1>Crear usuario</h1>
      <br>
      {{Form::open(array('url'=>'registro'))}}
        {{Form::label('email', 'E-mail:')}}{{Form::email('email', null, array('class' =>'form-control'))}}<br>
        {{Form::label('pass', 'Contraseña:')}}{{Form::password('pass', array('class'=>'form-control'))}}<br>
        {{Form::label('pass2', 'Confirmar contraseña:')}}{{Form::password('pass2', array('class'=>'form-control'))}}<br>
        {{Form::submit('Crear cuenta', array('class'=>'btn- btn-primary'))}}
      {{Form::close()}}
    </div>
@stop
