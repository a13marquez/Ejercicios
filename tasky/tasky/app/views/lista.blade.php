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
        {{Form::submit('Guardar', array('class' => 'btn btn-lg btn-success'))}}
      </span>
    </div>

    {{Form::close()}}
    <p>&nbsp;</p>
      @if( count($tareas) !=0)
      <table class="table  table-responsive table-striped">
        @foreach($tareas as $tarea)
          @if($tarea->estado =="En proceso")
            <tr class ="info">

          @elseif($tarea->estado =="Completada")
            <tr class ="success">

          @else
            <tr>


          @endif
      
            <td width="70%">{{$tarea->tarea}}</td>
            <td>{{$tarea->estado}}</td>
            <td>
              @if($tarea->estado =="Pendiente")
                {{ HTML::link('iniciar/'.$tarea->id, '', array('class'=>'glyphicon glyphicon-play btn btn-xs btn-primary'))}}
              @elseif($tarea->estado =="En proceso")
                {{ HTML::link('completar/'.$tarea->id, '', array('class'=>'glyphicon glyphicon-ok btn btn-xs btn-success'))}}
              @endif
              {{ HTML::link('eliminar/'.$tarea->id, '', array('class'=>'glyphicon glyphicon-trash btn btn-xs btn-danger'))}}
            </td>
            </td>
          </tr>
        @endforeach
          </table>
      @else
        <h2 class="text-center">No hay tareas para mostrar</h2>
      @endif


  </div>
@endsection
