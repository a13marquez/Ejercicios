<!DOCTYPE html>
<html lang="es">
<head>
  <title>Subida de archivos</title>
</head>
<body>
  <form name="upload" action="subida.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
    Avatar: <br \><input type="file" name="avatar"><br \>
    <input type="submit" value="Guardar">
  </form>
</body>
</html>
