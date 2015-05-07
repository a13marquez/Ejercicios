<?php
  session_start();
  try{
    if(empty($_POST['email']) || empty($_POST['pass'])){
        throw new Exception('Hay que cubrir todos los campos');
    }
    $email = addslashes(strip_tags($_POST['email']));
    $pass = addslashes(strip_tags($_POST['pass']));

    $conexion = new mysqli('localhost', 'root', '', 'ejercicios') ;
    $resultado = $conexion->query("SELECT * FROM usuarios WHERE email='$email'");
      if($resultado->num_rows==0){
        throw new Exception('Datos de acceso incorrectos');
      }

      $usuario = $resultado->fetch_object();

      if(!password_verify($pass, $usuario->password)){
        throw new Exception('Datos de acceso incorrectos');
      }

      $_SESSION['usuario_id']= $usuario->id;
      header('Location: perfil.php');
  }catch(Exception $e){
    $_SESSION['mensaje'] = $e->getMessage();
    header('Location: formularioLogin.php');
    exit();
  }
?>
