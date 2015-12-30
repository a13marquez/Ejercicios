<table border="1">
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Marca</th>
    <th>Precio</th>
    <th>Stock</th>
  </tr>
<?php
  $conexion = new mysqli('localhost', 'root', '', 'pruebalaravel');
  $resultado = $conexion->query("select * from productos");

  while($registro = $resultado->fetch_assoc()){
    echo '<tr>';
    echo '<td>' .$registro['id'].'</td>';
    echo '<td>' .$registro['nombre'].'</td>';
    echo '<td>' .$registro['marca'].'</td>';
    echo '<td>' .$registro['precio'].'</td>';
    echo '<td>' .$registro['stock'].'</td>';
    echo '<td>';
    echo '<button class="editar" data-id="' . $registro['id'] . '">Editar</button>';
    echo '<button class="borrar" data-id="' . $registro['id'] . '">Borrar</button>';
    echo '</td>';
    echo '</tr>';
  }
 ?>
 </table>
