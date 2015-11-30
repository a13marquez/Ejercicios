<?php
  $nombre = $_POST['nombre'];
  $marca = $_POST['marca'];
  $precio = $_POST['precio'];
  $stock = $_POST['stock'];

  $conexion = new mysqli('localhost', 'root', '', 'pruebalaravel');
  $resultado = $conexion->query("insert into productos values ('', '$nombre', '$marca', '$precio', '$stock')");
 ?>
