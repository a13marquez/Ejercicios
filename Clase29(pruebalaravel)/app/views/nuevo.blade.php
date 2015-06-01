@extends('default')

@section('titulo')
  Agregar nuevo producto
@stop
{{--Usando las clases de laravel nos aseguramos de que sea el framework el que añade el código <html>
    y por tanto minimizamos errores. Además Laravel avisa si se produce un error y HTML no
--}}


  </body>
</html>
@section('contenido')
  <div class="container">
    <h1>Agregar un nuevo producto</h1>
    {{ Form::open(array('url'=>'nuevo-producto', 'class'=>'container-fluid')) }}
      {{Form::label('nombre', 'Nombre: ')}}{{Form::text('nombre', null, array('class'=>'form-control'))}}
      {{Form::label('marca', 'Marca: ')}}{{Form::text('marca', null, array('class'=>'form-control'))}}
      {{Form::label('precio', 'Precio: ')}}{{Form::text('precio', null, array('class'=>'form-control'))}}
      {{Form::label('stock', 'Stock: ')}}{{Form::text('stock', null, array('class'=>'form-control'))}}
      {{Form::submit('Guardar Producto', array('class'=>'btn btn-primary'))}}
    {{Form::close()}}
  </div>
@stop
