@extends('default')

@section('titulo')
  Crear cuenta
@stop

@section('contenido')
<div class="container ">
  <div class="col-xs-6 col-xs-offset-3 jumbotron">
      <h2>Registro de usuario</h2>

      @if($errors->has('email') || $errors->has('pass'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label=Cerrar name="button">
            <span aria-hidden="true">&times;</span>
          </button>
          {{$errors->first('email')}}<br>
          {{$errors->first('pass')}}
        </div>
      @endif

      {{Form::open(array('url'=>'registro'))}}
        {{Form::label('email','Email:')}}{{Form::email('email', Input::old('email'), array('class'=>'form-control'))}}
        {{Form::label('pass', 'Contraseña:')}}{{Form::password('pass', array('class'=>'form-control'))}}
        {{Form::label('pass2', 'Confirmar contraseña:')}}{{Form::password('pass2', array('class'=>'form-control'))}}<br><br>
        <p class="text-center">
          {{Form::submit('Crear cuenta', array('class' => 'btn btn-primary'))}}
        </p>
      {{form::close()}}
  </div>
</div>
@stop
