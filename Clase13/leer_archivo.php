<!DOCTYPE html>
<html>
<head>
  <title>Leer archivo</title>
  <meta charset="utf-8">
<body>
  <?php
    if (is_file('config/config.php')){
      /*
      $contenido = file_get_contents('config/config.conf');
      echo nl2br($contenido);
    */
      $archivo = fopen('config/config.php', 'r');

      //la funcion feof devuelve true cuando se llega al final del archivo
      while(!feof($archivo)){
        $linea = fgets($archivo);
        if($linea == "Repeticion5 \r\n"){
          echo ($linea);
          break;
        }
      }
      fclose($archivo);
    }
  ?>
</body>
</head>
</html>
