<?php
  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $conexion = new mysqli('localhost', 'root', '', 'pruebalaravel');
    $resultado = $conexion->query("select * from productos");
    $productos = array();
    while ($registro = $resultado->fetch_object()) {
      array_push($productos , $registro);
      
    }
  echo json_encode($productos);
  }
  else {
    header('HTTP/1.1 405 Method Not Allowed');
  }
?>
