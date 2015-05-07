<?php
  session_start();
  if(isset($_SESSION['usuario_id'])){
    header('Location: perfil.php');
    exit();
  }
?>
<!DOCTYPE html>
<head>
  <title>Formulario de login</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>Formulario de login</h1>
  <form name="login" action="login.php" method="post">
    <label for="email">e-mail:</label><input type="email" name="email"><br>
    <label for="pass">Contraseña:</label><input type="password" name="pass"><br>
    <input type="submit" value="Iniciar sesión">
  </form>
  <?php
    if (isset($_SESSION['mensaje'])){
      echo '<p>'. $_SESSION['mensaje'] . '</p>';
      unset($_SESSION['mensaje']);
    }

  ?>
</body>
</html>
