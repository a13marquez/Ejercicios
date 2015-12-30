<?php
  if(isset( $_POST['id']))
    $id = $_POST['id'];

  $nombre = $_POST['nombre'];
  $marca = $_POST['marca'];
  $precio = $_POST['precio'];
  $stock = $_POST['stock'];
  $conexion = new mysqli('localhost', 'root', '', 'pruebalaravel');
  if(empty($id)){
    $resultado = $conexion->query("INSERT INTO productos VALUES ('', '$nombre', '$marca', '$precio', '$stock')");
    exit();
  }
  $resultado = $conexion->query("UPDATE productos SET nombre='$nombre', marca='$marca', precio='$precio', stock='$stock' WHERE id='$id'");
 ?>
