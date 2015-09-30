@extends('default')

@section('titulo')
  Crear una cuenta
@stop

@section('contenido')
  <div class="container ">
    <div class="col-xs-6 col-xs-offset-3 jumbotron">
        <h2>Registro de usuario</h2>
        {{Form::open(array('url'=>'registro'))}}
          {{Form::label('email','Email:')}}{{Form::email('email', null, array('class'=>'form-control'))}}
          {{Form::label('pass', 'Contraseña:')}}{{Form::password('pass', array('class'=>'form-control'))}}
          {{Form::label('pass2', 'Confirmar contraseña:')}}{{Form::password('pass2', array('class'=>'form-control'))}}<br><br>
          <p class="text-center">
            {{Form::submit('Crear cuenta', array('class' => 'btn btn-primary'))}}
          </p>
        {{form::close()}}
    </div>
  </div>
@stop
