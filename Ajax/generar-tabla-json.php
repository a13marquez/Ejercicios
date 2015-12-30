<?php
  $conexion = new mysqli('localhost', 'root', '', 'pruebalaravel');
  $resultado = $conexion->query("select * from productos");
  $productos = array();

   while ($registro = $resultado->fetch_object()) {
     array_push($productos, $registro);
   }

  $response = json_encode($productos);


 ?>
