<?php
  //Crar un formulario que pida nombre de usuario (nombre, apellidos, direccion) y
  //un campo en el que el usuario suba su curriculum
?>
<!DOCTYPE html>
<html>
<head>
  <title>Guardar usuario en archivo</title>
  <meta charset="utf-8">
</head>
<body>
<form name="guardar-curriculum" action="EjercicioClase15_03_18_fomularioUsuario.php" method="post" enctype="multipart/form-data">
  <input type="text" name="usuario" placeholder="Introduce tu usuario"><br>
  <input type="password" name="pass" placeholder="Introduce tu contraseña"><br>

  <input type="submit" value="Guardar"><br \>

</form>
</body>
</html>
