<?php
  //Las excepciones en PHP se capturan con un bloque try catch
  try{
    $pass ='1234';
    if(strlen($pass)<6){
      throw new Exception('La contraseña debe contener al menos 6 caracteres', 1);
    }
  }catch(Exception $e){
    echo $e->getMessage().'<br>';
    echo $e->getCode().'<br>';
    echo $e->getFile().'<br>';
  }
?>
