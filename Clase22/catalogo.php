<DOCTYPE html>
  <head>
    <title>Catalogo de libros</title>
    <meta charset="utf-8">
  </head>
  <body>
    <table border=1>
      <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Editorial</th>
        <th>Nº Páginas</th>
        <th>Género</th>
      </tr>
      <?php
        $conexion = new mysqli('localhost', 'root', '', 'ejercicios'); #Conexión a la base de datos
        $resultado = $conexion->query("SELECT * FROM libros"); #Recogemos los libros de la tabla

        while($libro = $resultado->fetch_object()){
          echo '<tr>';
            echo '<td>'. $libro->titulo . '</td>';
            echo '<td>'. $libro->autor.'</td>';
            echo '<td>'. $libro->editorial.'</td>';
            echo '<td>'. $libro->paginas.'</td>';
            echo '<td>'. $libro->genero.'</td>';
          echo '<tr>';

        }

        $conexion->close();#Cerramos la conexión
      ?>
    </table>
  </body>
</html>
