<?php
  //Para eliminar una sesión primero hay que empezarla
  session_start();

  //Para eliminar la variable de sesión
  unset($_SESSION['url']);

  //Para borrar la sesión
  session_destroy();
?>
