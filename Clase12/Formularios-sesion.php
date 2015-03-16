<?php session_start();?>
<!DOCTYPE html>
<head>
  <title>Formularios</title>
  <meta charset="utf-8">
</head>
<body>

  <?php
    if (isset($_SESSION['mensaje'])){
          echo '<div>'. $_SESSION['mensaje']. '</div>';
          unset($_SESSION['mensaje']);

    };
  ?>

  <form name="mi_formulario" action="procesar-formulario-sesion.php" method="post">
    <input type="text" name="nombre" placeholder="Introduce tu nombre"><br>
    <input type="email" name="email" placeholder="Introduce tu email"><br>
    <textarea name ="mensaje" placeholder="Escribe tu comentario"></textarea><br>
    <input type="submit" value="Enviar">
  <form>
</body>
</html>
