<!DOCTYPE html>
<head>
  <title>Formularios</title>
  <meta charset="utf-8">
</head>
<body>
  <form name="mi_formulario"  .on="procesar-formulario.php" method="post">
    <input type="text" name="nombre" placeholder="Introduce tu nombre"><br>
    <input type="email" name="email"  placeholeder="Introduce tu email"><br>
    <textarea name="mensaje" placeholder="Introduce tu comentario"></textarea><br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>
