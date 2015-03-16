<?php
  if(isset($_COOKIE['usuario']) && isset($_COOKIE['email'])){

    $usuario = $_COOKIE['usuario'];
    $email = $_COOKIE['email'];

    echo '<p><strong>Nombre:</strong> '. $usuario . '</p>';
    echo '<p><strong>Email:</strong> '. $email . '</p>';
  }else{
    echo '<p>No hay información de usuario</p>';
  }
?>
