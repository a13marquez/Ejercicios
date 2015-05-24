@extends('default')

@section('titulo')
  Mi primer proyecto
@stop

@section('contenido')
  <div class="container">
    <h1>Bienvenido a laravel </h1>
    <table class="table-responsive table bordered">
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Marca</th>
        <th>Precio</th>
        <th>Marca</th>
      </tr>
      @foreach($productos as $producto)
          <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->marca}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->stock}}</td>
          </tr>
      @endforeach
    </table>
   <a href="http://www.laravel.com">Página Oficial</a>
   <br>
   <br>
  
  </div>
@stop
