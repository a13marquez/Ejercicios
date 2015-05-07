<?php
  //Al crear una unica funcion de conexión a la base de datos si hay que modificarla es más sencillo
  function conectar(){
    $conexion = new mysqli('localhost', 'root', '', 'ejercicios');

    if(!$conexion){
      return  false;
    }

    return $conexion;
  }
?>
