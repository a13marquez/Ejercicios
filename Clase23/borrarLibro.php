<?php
  $id= addslashes(strip_tags($_GET['id']));


  $conexion = new mysqli('localhost', 'root', '', 'ejercicios');
  $resultado = $conexion->query("DELETE FROM libros WHERE id=$id");

    if(!resultado){
      #instrucciones cuando falla la consulta
      echo 'Error de consulta';
    }
    header('Location: catalogo.php');

    exit();

?>
