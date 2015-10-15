@extends('default')

@section('titulo')
  Tu gestor de tareas en la nube
@stop

@section('contenido')
    <div class="jumbotron">
      <div class="container">
        <h1>Tasky</h1>
        <p>
          {{Lang::get('messages.entradilla')}}
        </p>
        <p class="text-center">
          @if(Auth::check())
            {{HTML::link('lista',Lang::get('messages.mis_tareas') , array('class'=>'btn btn-success'))}}
            {{HTML::link('logout',Lang::get('messages.cerrar_sesion'), array('class'=>'btn btn-danger'))}}
          @else
            {{HTML::link('registro', Lang::get('messages.crear_cuenta'), array('class'=>'btn btn-success'))}}
            {{HTML::link('login',Lang::get('messages.iniciar_sesion') , array('class'=>'btn btn-primary'))}}
          @endif
        </p>
      </div>
    </div>
@endsection
