<?php
  session_start();
  if(isset($_SESSION['usuario_id'])){
    header('Location: perfil.php');
    exit();
  }
?>
<!DOCTYPE html>
<head>
  <title>Formulario de registro</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>Formulario de registro</h1>
  <form name="registro" action="registro.php" method="post">
    <label for="email">e-mail:</label><input type="email" name="email"><br>
    <label for="pass">Contraseña:</label><input type="password" name="pass"><br>
    <label for="pass2">Confirma contraseña:</label><input type="password" name="pass2"><br>
    <input type="submit" value="Crear cuenta">
  </form>
  <?php
    if (isset($_SESSION['mensaje'])){
      echo '<p>'. $_SESSION['mensaje'] . '</p>';
      unset($_SESSION['mensaje']);
    }

  ?>
</body>
</html>
