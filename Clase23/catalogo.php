<DOCTYPE html>
  <head>
    <title>Catalogo de libros</title>
    <meta charset="utf-8">
  </head>
  <body>
    <table border=1>
      <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Autor</th>
        <th>Editorial</th>
        <th>Nº Páginas</th>
        <th>Género</th>
        <th>Acciones</th>
      </tr>
      <?php
        $conexion = new mysqli('localhost', 'root', '', 'ejercicios'); #Conexión a la base de datos
        $resultado = $conexion->query("SELECT * FROM libros"); #Recogemos los libros de la tabla

        while($libro = $resultado->fetch_object()){
          echo '<tr>';
          echo '<td>'. $libro->id . '</td>';
            echo '<td>'. $libro->titulo . '</td>';
            echo '<td>'. $libro->autor.'</td>';
            echo '<td>'. $libro->editorial.'</td>';
            echo '<td>'. $libro->paginas.'</td>';
            echo '<td>'. $libro->genero.'</td>';
            echo '<td>';
            echo '<a href="borrarLibro.php?id='. $libro->id . '">Borrar</a>';
            echo '</td>';
          echo '<tr>';
        }
        $conexion->close();#Cerramos la conexión
      ?>
    </table>
    <p></p>
    <form name="nuevo" action="guardarLibro.php" method="post">
      <label for="titulo">Título: </label><input type="text" name="titulo"><br>
      <label for="autor">Autor: </label><input type="text" name="autor"><br>
      <label for="editorial">Editorial: </label><input type="text" name="editorial"><br>
      <label for="paginas">Nº de páginas: </label><input type="text" name="paginas"><br>
      <label for="genero">Género: </label><input type="text" name="genero"><br>
      <input type="submit" value="Guardar">
    </form>
  </body>
</html>
