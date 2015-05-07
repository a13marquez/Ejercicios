<?php
  session_start();
  # error_reporting(E_ALL ^ E_NOTICE);

  require_once 'output_fns.php'; # Funciones para mostrar outputs en la pantalla
  require_once 'auth_fns.php'; # Funciones de autenticación
  require_once 'validation_fns.php'; # Funciones relacionadas con la validación de datos
  require_once 'db_fns.php'; # Funciones relacionadas con la base de datos
  require_once 'app.php'; # Funciones principales

?>
