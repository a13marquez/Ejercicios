<!DOCTYPE html>
<head>
  <title>Formularios</title>
  <meta charset="utf-8">
</head>
<body>
  <?php
    if (isset($_GET['error'])){
      switch($_GET['error']){
        case 1:
          echo '<div>Hay que añadir todos los campos del formulario</div>';
      };
    };
  ?>
  <form name="mi_formulario" action="procesar-formulario.php" method="post">
    <input type="text" name="nombre" placeholder="Introduce tu nombre"><br>
    <input type="email" name="email" placeholder="Introduce tu email"><br>
    <textarea name ="mensaje" placeholder="Escribe tu comentario"></textarea><br>
    <input type="submit" value="Enviar">
  <form>
</body>
</html>
