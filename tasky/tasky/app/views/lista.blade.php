@extends('default')

@section('titulo')
  Mis tareas
@stop

@section('contenido')
  <div class="container">




      @if( count($tareas) !=0)
      <table class="table table-responsive table-stripped">
        @foreach($tareas as $tarea)
          <tr>
            <td width="70%">{{$tarea->tarea}}</td>
            <td>{{$tarea->estado}}</td>
            <td>$nbsp;</td>
          </tr>
        @endforeach
          </table>
      @else
        <h2 class="text-center">No hay tareas para mostrar</h2>
      @endif


  </div>
@endsection
