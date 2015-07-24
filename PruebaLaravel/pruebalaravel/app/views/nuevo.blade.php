@extends('default')

@section('titulo')
  Agregar nuevo producto
@stop
@section('contenido')
    <div class="container">
      <h1>Agregar nuevo producto</h1>

      {{Form::open(array('url'=>'nuevo-producto'))}}
        {{Form::label('nombre', 'Nombre:')}}{{Form::text('nombre', null, array('class'=>'form-control'))}}<br>
        {{Form::label('marca', 'Marca:')}}{{Form::text('marca', null, array('class'=>'form-control'))}}<br>
        {{Form::label('precio', 'Precio:')}}{{Form::text('precio', null, array('class'=>'form-control'))}}<br>
        {{Form::label('stock', 'stock:')}}{{Form::text('stock', null, array('class'=>'form-control'))}}<br>
        {{Form::submit('Guardar producto', array('class'=>'btn btn-primary'))}}
      {{Form::close()}}
      <br>
      <br>
      {{HTML::link('/', 'Volver')}}
    </div>

@stop
