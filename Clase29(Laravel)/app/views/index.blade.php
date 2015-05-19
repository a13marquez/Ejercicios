@extends('default')

@section('titulo')
  Mi primer proyecto
@stop

@section('contenido')
  <div class="container">
    <h1>Bienvenido a laravel </h1>
    <p>Occaecat deserunt labore dolore proident exercitation
      commodo labore qui cillum consectetur excepteur enim reprehenderit consectetur.
      Ullamco eu amet in veniam aliquip elit excepteur nostrud Lorem. Eu ipsum magna nisi sint id.
      Magna est non dolor exercitation sint voluptate officia. Amet nostrud occaecat in ullamco do
      occaecat labore qui ipsum sit nisi irure culpa. Laboris culpa non et consectetur sint
      Lorem officia sint id sunt eiusmod. Sunt dolore adipisicing ullamco velit reprehenderit
      exercitation non do dolor velit. Commodo tempor ipsum minim labore anim consectetur.
   </p>
   <a href="http://www.laravel.com">Página Oficial</a>
   <br>
   <br>
   @foreach($usuarios as $usuario)
    <p>{{$usuario}}</p>
   @endforeach
  </div>
@stop
