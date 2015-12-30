<?php
  $id = addslashes(strip_tags($_POST['id']));

  $conexion = new mysqli('localhost', 'root', '', 'pruebalaravel');
  $resultado= $conexion->query("SELECT * FROM productos WHERE id='$id'");

  $resultado = $resultado->fetch_object();

  echo json_encode($resultado);
 ?>
