<?php
  session_start();


  if(!$_SESSION['usuario_id']){
    $_SESSION['mensaje']='Zona para usuarios registrados';
    header('Location: formularioLogin.php');
    exit();
  }
?>
<!DOCTYPE html>
<head>
  <title>Mi perfil</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>Zona de usuarios</h1>
  <a href="logout.php">Cerrar sesión</a>
</body>
</html>
