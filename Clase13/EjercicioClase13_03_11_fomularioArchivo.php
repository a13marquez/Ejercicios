<?php
  if(empty($_POST['nombre'])|| empty($_POST['email']) || empty($_POST['dni'])){
    session_start();
    $_SESSION['mensaje'] = 'Hay que cubrir todos los campos';
    header('Location: EjercicioClase11_03_11_formulario.php');
    exit();
  }
  $nombre = addslashes(strip_tags($_POST['nombre']));
  $dni = addslashes(strip_tags($_POST['dni']));
  $email = addslashes(strip_tags($_POST['email']));


  $archivo = fopen('config/firma', 'a');
  fwrite($archivo, "$nombre\r\n");
  fwrite($archivo, "$dni\r\n");
  fwrite($archivo, "$email\r\n");
  fclose($archivo);
?>
