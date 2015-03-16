<?php
  //Al enviar por Post usamos un array de PHP $_POST, que se rellena automaticamente cada vez que hay
  //una petición post.
  //Para evitar inyecciones de código, se pueden usar funciones, que no son funciones específicas de
  //seguridad, estas funciones se usan cuando se recogen datos. Una de ellas es addslashes, que escapa
  //los caracteres especiales com las comillas.
  //strip_tags elimina los tags html, asi se evita la ejecución de un script. Se pueden indicar los
  //tags permitidos
  if(empty($_POST['nombre'])|| empty($_POST['email']) || empty($_POST['mensaje'])){
    session_start();
    $_SESSION['mensaje'] = 'Hay que cubrir todos los campos';
    header('Location: Formularios-sesion.php');
    exit();
    //Ponemos exit para que deje de cargar el resto
  };
  $nombre = addslashes(strip_tags($_POST['nombre']));
  $email = addslashes(strip_tags($_POST['email']));
  $mensaje = addslashes(strip_tags($_POST['mensaje']));

  echo '<p>'. $nombre . '</p>';
  echo '<p>'. $email . '</p>';
  echo '<p>'. $mensaje . '</p>';
?>
