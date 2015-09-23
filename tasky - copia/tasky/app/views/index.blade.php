@extends('default')

@section('titulo')
    Tu gestor de tareas en la nube
@stop

@section('contenido')
  <div class="jumbotron">
    <div class="container">
      <h1>Tasky</h1>
      <p>
        Crea y administra tus tareas en la nube de forma inmediata con Tasky.
        Ponemos a tu disposición varias herramientas para hacer más productivo tu día a día
      </p>
      <p class="text-center">
        {{HTML::link('registro', 'Crear cuenta', array('class'=>'btn btn-primary'))}}
        {{HTML::link('login', 'Iniciar sesión', array('class'=>'btn btn-success'))}}
      </p>
    </div>

  </div>
@stop
