<?php
  $id = addslashes(strip_tags($_POST['id']));

  $conexion = new mysqli('localhost', 'root', '', 'pruebalaravel');
  $resultado = $conexion->query("DELETE FROM productos WHERE id='$id'");
  return $resultado;
 ?>
