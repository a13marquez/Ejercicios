<?php
  session_start();
  try{
    if(empty($_POST['email']) || empty($_POST['pass']) || empty($_POST['pass2'])){
        throw new Exception('Hay que cubrir todos los campos');
    }
    $email = addslashes(strip_tags($_POST['email']));
    $pass = addslashes(strip_tags($_POST['pass']));
    $pass2 = addslashes(strip_tags($_POST['pass2']));
    if ($pass != $pass2){
      throw new Exception('Las contraseñas no coinciden');
    }
    if (strlen($pass) < 6){
      throw new Exception('Las contraseña debe tener un mínimo de 6 caracteres');
    }

    $passCifrada = password_hash($pass, PASSWORD_DEFAULT);

    $conexion = new mysqli('localhost', 'root', '', 'ejercicios');
    $resultado = $conexion->query("INSERT INTO usuarios VALUES('', '$email', '$passCifrada')");
    if(!$resultado){
      throw new Exception('No se pudo completar el registro, intentalo más tarde');
    }
    $_SESSION['mensaje'] = "Registro completado";
    header('Location: formularioLogin.php');

  }catch(Exception $e){
    $_SESSION['mensaje'] = $e->getMessage();
    header('Location: formularioRegistro.php');
    exit();
  }


?>
