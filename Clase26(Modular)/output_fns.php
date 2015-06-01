
<?php
/*
  En este caso al mostrar HTML en la función es más comodo crear dos bloques php, abrir la funcion
  en uno y cerrarla en el otro y entre los bloques html poner el HTML puro. En este caso no hace falta
  cerrar el body.
  También es interesante agregar los elementos de diseño aqui, así al modificar esta cabecera
  se modifica en todas las páginas de mi sito. Tambien puede servir para añadir librerias, etc.
*/
  function mostrarCabecera($titulo = ''){
?>

    <html lang="es">
    <head>
      <title><?php echo $titulo ?></title>
      <meta charset="utf-8">
    </head>
    <body>
<?php
  }
  function mostrarPie(){
?>


    </body>
    </html>
<?php
  }

  function mostrarFormLogin(){
?>
    <div>
      <form name="login" action="login.php" method="post">
      </form>
    </div>
<?php
  }
?>
