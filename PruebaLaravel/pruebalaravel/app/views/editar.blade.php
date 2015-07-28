@extends('default')

@section('titulo')
  Editar producto {{$producto->id}}
@stop

@section('contenido')
div class="container">
  <h1>Editar producto {{$producto->id}}</h1>

  {{Form::open(array('url'=>'editar'))}}
    {{Form::hidden ('id', $producto->id)}}
    {{Form::label('nombre', 'Nombre:')}}{{Form::text('nombre', $producto->nombre, array('class'=>'form-control'))}}<br>
    {{Form::label('marca', 'Marca:')}}{{Form::text('marca', $producto->marca, array('class'=>'form-control'))}}<br>
    {{Form::label('precio', 'Precio:')}}{{Form::text('precio', $producto->precio, array('class'=>'form-control'))}}<br>
    {{Form::label('stock', 'stock:')}}{{Form::text('stock', $producto->stock, array('class'=>'form-control'))}}<br>
    {{Form::submit('Guardar cambios', array('class'=>'btn btn-primary'))}}
  {{Form::close()}}
  <br>
  <br>
  {{HTML::link('/', 'Volver')}}
</div>
@stop
