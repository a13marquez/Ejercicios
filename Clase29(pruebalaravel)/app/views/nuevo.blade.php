@extends('default')

@section('titulo')
  Agregar nuevo producto
@stop

@section('contenido')
  <div class="container">
    <h1>Agregar un nuevo producto</h1>
    {{ Form::open(array('url'=>'nuevo-producto')) }}

    {{Form::close()}}
  </div>
@stop
