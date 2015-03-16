<?php

  if(empty($_POST['nombre'])|| empty($_POST['email']) || empty($_POST['mensaje'])){
    session_start();
    $_SESSION['mensaje'] = 'Hay que cubrir todos los campos';
    header('Location: Formularios-sesion.php');
    exit();
    //Ponemos exit para que deje de cargar el resto
  };
  $nombre = addslashes(strip_tags($_POST['nombre']));
  $email = addslashes(strip_tags($_POST['email']));
  $mensaje = addslashes(strip_tags($_POST['mensaje']));

  echo '<p>'. $nombre . '</p>';
  echo '<p>'. $email . '</p>';
  echo '<p>'. $mensaje . '</p>';
?>
