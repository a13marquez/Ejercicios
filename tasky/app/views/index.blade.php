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
        {{HTML::link('index.php/registro', 'Crear cuenta', array('class'=>'btn btn-primary'))}}
        {{HTML::link('index.php/login', 'Iniciar sesión', array('class'=>'btn btn-success'))}}
      </p>
    </div>
  </div>
  <p>
    &nbsp;
  </p>
  <div class="container">
    <div class="col-xs-12 col-md-4">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
      ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
      ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
      in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
      cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <div class="col-xs-12 col-md-4">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
      ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
      ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
      in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
      cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <div class="col-xs-12 col-md-4">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
      ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
      ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
      in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
      cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
  </div>
@stop
