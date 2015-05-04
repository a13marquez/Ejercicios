<?php

if(!is_dir('usuarios')){
  mkdir('usuarios');
}
  if(empty($_POST['usuario'])||  empty($_POST['pass'])){
    session_start();
    $_SESSION['mensaje'] = 'Hay que cubrir todos los campos';
    header('Location: EjercicioClase15_03_18_formulario.php');
    exit();
  }
  $usuario = addslashes(strip_tags($_POST['usuario']));
  $pass = addslashes(strip_tags($_POST['pass']));
  $archivo = fopen('usuarios/almacen', 'a+');

    $linea = fgets($archivo);
    if(explode(',', $linea)[1] == $pass ."\r" && explode(',', $linea)[0] == $usuario){
      echo '<div>' .$usuario .'</div>';
    }else{
      echo '<div>'. explode(',', $linea)[1]. '</div>';
      fwrite($archivo, "$usuario" . ',');
      fwrite($archivo, "$pass");
      fwrite($archivo, "\r");
      fclose($archivo);

    }

/*  $archivo = fopen('usuarios/almacen', 'r');

  //la funcion feof devuelve true cuando se llega al final del archivo
  while(!feof($archivo)){
    $linea = fgets($archivo);
    if($linea == "$usuario"){
      echo ($linea);
      break;
    }
  }
  fclose($archivo);*/

?>
