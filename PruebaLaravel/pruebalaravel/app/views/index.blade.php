@extends('default')

@section('titulo')
  Mi primer proyecto

@stop
@section('contenido')
  <div class=container>
    <h1>Bienvendio a Laravel</h1>
    {{HTML::link('nuevo-producto', 'Nuevo producto', array('class'=>'btn btn-primary'))}}
    <br>
    <br>
    <table class="table table-responsive table-striped">
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Marca</th>
        <th>Precio</th>
        <th>Stock</th>
      </tr>
    @foreach ($productos as $producto)
        <tr>
          <td>{{$producto->id}}</td>
          <td>{{$producto->nombre}}</td>
          <td>{{$producto->marca}}</td>
          <td>{{$producto->precio}}</td>
          <td>{{$producto->stock}}</td>
        </tr>
    @endforeach
    </table>
</div>
@stop
