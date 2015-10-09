@extends('default')

@section('titulo')
  Recuperar contraseña
@stop

@section('contenido')
<div class="container">
  <div class="col-xs-12 col-lg-8 col-lg-offset-2 jumbotron">
      <h2>Recuperar contraseña</h2>
      {{Form::open(array('url'=>'recuperar'))}}
        {{Form::hidden('token', $token)}}
        {{Form::label('email','Email:')}}{{Form::email('email', null, array('class'=>'form-control'))}}
        {{Form::label('password', 'Contraseña:')}}{{Form::password('password', array('class'=>'form-control'))}}
        {{Form::label('password_confirmation', 'Confirmar contraseña:')}}{{Form::password('password_confirmation', array('class'=>'form-control'))}}<br><br>
        <p class="text-center">
          {{Form::submit('Cambiar contraseña', array('class' => 'btn btn-primary'))}}
        </p>
      {{form::close()}}
  </div>
</div>
@stop
