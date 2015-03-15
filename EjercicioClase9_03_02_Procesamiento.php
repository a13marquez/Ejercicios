<?php
  //Al enviar por Post usamos un array de PHP $_POST, que se rellena automaticamente cada vez que hay
  //una petición post.
  //Para evitar inyecciones de código, se pueden usar funciones, que no son funciones específicas de
  //seguridad, estas funciones se usan cuando se recogen datos. Una de ellas es addslashes, que escapa
  //los caracteres especiales com las comillas.
  //strip_tags elimina los tags html, asi se evita la ejecución de un script. Se pueden indicar los
  //tags permitidos
  if(empty($_POST['altura'])){
    header('Location: EjercicioClase9_03_02_Formulario.php?error=1');
    exit();
    //Ponemos exit para que deje de cargar el resto
  }
  elseif(empty($_POST['base'])){
    header('Location: EjercicioClase9_03_02_Formulario.php?error=2');
    exit();
  };
  $altura = addslashes(strip_tags($_POST['altura']));
  $base = addslashes(strip_tags($_POST['base']));
  $area = $base * $altura /2;
  echo '<p><strong>Base</strong>: '. $base . '</p>';
  echo '<p><strong>Altura</strong>: '. $altura . '</p>';
  echo '<p><strong>Area</strong>: '. $area . '</p>';
?>
