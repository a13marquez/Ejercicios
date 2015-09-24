@extends('default')

@section('titulo')
  Mis tareas
@stop

@section('contenido')
  <div class="container">
    <table class="table table-responsive table-strippeds">
      @foreach($tareas as $tarea)
        <tr>
          <td>{{$tarea->tarea}}</td>
          <td>{{$tarea->estado}}</td>
          <td>$nbsp;</td>
        </tr>
      @endforeach
    </table>
  </div>
@endsection
