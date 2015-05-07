<?php
  $titulo= addslashes(strip_tags($_POST['titulo']));
  $autor= addslashes(strip_tags($_POST['autor']));
  $editorial= addslashes(strip_tags($_POST['editorial']));
  $paginas= addslashes(strip_tags($_POST['paginas']));
  $genero= addslashes(strip_tags($_POST['genero']));

  $conexion = new mysqli('localhost', 'root', '', 'ejercicios');
  $resultado = $conexion->query("INSERT INTO libros VALUES('', '$titulo','$autor','$editorial','$paginas','$genero')");

    if(!$resultado){
      #instrucciones cuando falla la consulta
      echo 'Error de consulta';
    }
    header('Location: catalogo.php');

    exit();

?>
