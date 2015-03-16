<?php
  /*
    Una sesión es una conexión entre el servidor y el navegador del cliente. Las sesiones son distintas
    en chrome y firefox por ejemplo
    Las sesiones se guardan en el servidor. Solo se envian cuando hay conexión entre el servidor
    y el ordenador del cliente.
    Para poder recuperar una sesión el servidor envia un token o identificador de sesión. La sesión se almacena en
    ambos lados, cliente y servidor y el navegador la solicita cuando se reabre la sesión.
    Los datos de la sesión se envian en cada petición HTTP. Mientras este activa la sesión se pueden manejar
    datos a lo largo de todas las páginas que vayamos pasando. Existen variables de sesión que están activas
    siempre que la página utilice sesiones. Esas variables de sesión se pueden utilizar para almacenar
    cualquier tipo de información.

    Para crear la sesión usamos la funcion session_start(). Esta función tiene que ir antes que cualquier bloque
    HTML. Si se añade un elemento antes de esta función (incluso un espacio), esta función daría error.
    hay que usar la función en todas las páginas en las que se quiere usar la sesión
  */
  session_start();
  //Para crear una variable de sesión:
  $_SESSION['url'] = 'http://www.google.es';
?>
