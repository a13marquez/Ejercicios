<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo') - Tasky</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.min.css">
    {{HTML::style('css/main.css')}}
  </head>
  <body>
    <nav class ="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed"
          data-toggle="collapse" data-target="#menu" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          {{HTML::link('/', 'Tasky', array('class' => 'navbar-brand')) }}
        </div>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="nav navbar-nav">
            <li>{{HTML::link('/', 'Inicio')}}</li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>{{HTML::link('idioma/es',  'ES')}}</li>
            <li>{{HTML::link('idioma/en',  'EN')}}</li>
            @if(Auth::check())
              <li>{{HTML::link('lista','Mis tareas')}}</li>
              <li>{{HTML::link('logout','Cerrar sesión')}}</li>
            @else
              <li>{{HTML::link('registro','Crear cuenta')}}</li>
              <li>{{HTML::link('login','Iniciar sesión')}}</li>
            @endif

          </ul>
        </div>
      </div>
    </nav>
    @yield('contenido')
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    {{HTML::script('js/main.js')}}
  </body>
</html>
