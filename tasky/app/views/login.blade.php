@extends('default')

@section('titulo')
    Iniciar sesión
@stop

@section('contenido')
<div class="container ">
  <div class="col-xs-6 col-xs-offset-3 jumbotron">
      <h2>Iniciar sesión</h2>
      {{Form::open(array('url'=>'registro'))}}
        {{Form::label('email','Email:')}}{{Form::email('email', null, array('class'=>'form-control'))}}
        {{Form::label('pass', 'Contraseña:')}}{{Form::password('pass', array('class'=>'form-control'))}}
        {{Form::checkbox('recordad')}}{{Form::label('recordar', 'No cerrar sesión')}}
        <br><br>
        <p class="text-center">
          {{Form::submit('Iniciar sesión', array('class' => 'btn btn-primary'))}}
        </p>
      {{form::close()}}
  </div>
</div>
@stop
