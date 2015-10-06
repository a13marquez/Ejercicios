@extends('default')

@section('titulo')
  Recuperar contraseña
@stop

@section('contenido')
  <div class="container">
    <div class="col-xs-6 col-xs-offset-3 jumbotron">
        <h2>Recuperar contraseña</h2>
        {{Form::open(array('url'=>'recordar'))}}
          {{Form::label('email','Email:')}}{{Form::email('email', null, array('class'=>'form-control'))}}
          <br><br>
          <p class="text-center">
            {{Form::submit('Recuperar contraseña', array('class' => 'btn btn-primary'))}}
          </p>
        {{form::close()}}
    </div>
  </div>
@endsection
