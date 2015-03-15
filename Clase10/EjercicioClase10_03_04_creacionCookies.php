<?php
  $nombre = addslashes(strip_tags($_POST['nombre']));
  $email = addslashes(strip_tags($_POST['email']));
  setcookie('usuario', $nombre);
  setcookie('email', $email);
  header('Location: EjercicioClase10_03_04_resultado.php');
?>
