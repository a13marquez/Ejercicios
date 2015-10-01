@extends('default')

@section('titulo')
  Mis tareas
@stop

@section('contenido')
  <div class="container">
    {{Form::open(array('url'=>'nueva'))}}
    <div class="input-group">
      {{Form::text('tarea', null, array('class'=>'form-control input-lg', 'placeholder'=>'Añade una tarea...'))}}
      <span class="input-group-btn">
        {{Form::sumbint('Guardar', array('class' => 'btn btn-lg btn-success'))}}
      </span>
    </div>

    {{Form::close()}}
    <p>&nbsp;</p>
      @if( count($tareas) !=0)
      <table class="table  table-responsive table-stripped">
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
