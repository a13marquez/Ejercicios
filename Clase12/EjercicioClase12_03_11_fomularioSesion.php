<?php
  $usuario = $_POST['usuario'];
  $pass = $_POST['pass'];

  if($usuario == "admin" && $pass== "admin"){
    session_start();
     header ('Location: EjercicioClase12_03_11_sesionIniciada.php');
  }
  else{
    header('Location: EjercicioClase12_03_11_formulario.php');
  }
?>
