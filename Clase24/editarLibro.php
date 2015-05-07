<?php
  $id= addslashes(strip_tags($_POST['id']));
  $titulo= addslashes(strip_tags($_POST['titulo']));
  $autor= addslashes(strip_tags($_POST['autor']));
  $editorial= addslashes(strip_tags($_POST['editorial']));
  $paginas= addslashes(strip_tags($_POST['paginas']));
  $genero= addslashes(strip_tags($_POST['genero']));

  $conexion = new mysqli('localhost', 'root', '','ejercicios');
  $resultado = $conexion->query("UPDATE libros SET titulo='$titulo', autor='$autor', editorial='$editorial', paginas='$paginas', genero='$genero' WHERE id='$id'");

  if(!$resultado){

  }
  header('Location: catalogo.php');

  exit();
?>
