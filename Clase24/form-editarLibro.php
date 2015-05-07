
<DOCTYPE html>
  <head>
    <title>Catalogo de libros</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $id = addslashes(strip_tags($_GET['id']));
      $conexion = new mysqli('localhost', 'root', '', 'ejercicios');
      $resultado = $conexion->query("SELECT * FROM libros WHERE id='$id'");
      if(!$resultado){
        #instrucciones cuando falla la consulta
        echo 'Error de consulta';
      }

      $libro = $resultado->fetch_object();
      $conexion->close();
    ?>
    <form name="editar" action="editarLibro.php" method="post">
      <input type="hidden" name="id" value="<?php echo $id; ?>"
      <label for="titulo">Título: </label><input type="text" name="titulo" value="<?php echo $libro->titulo; ?>"><br>
      <label for="autor">Autor: </label><input type="text" name="autor" value="<?php echo $libro->autor; ?>"><br>
      <label for="editorial">Editorial: </label><input type="text" name="editorial" value="<?php echo $libro->editorial; ?>"><br>
      <label for="paginas">Nº de páginas: </label><input type="text" name="paginas" value="<?php echo $libro->paginas; ?>"><br>
      <label for="genero">Género: </label><input type="text" name="genero" value="<?php echo $libro->genero; ?>"><br>
      <input type="submit" value="Guardar">
    </form>
  </body>
</html>
