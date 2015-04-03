<?php
  if(!is_dir('avatares')){
    mkdir('avatares');
  }
  //usamos uniqid para añadir un id único al archivo imprescindible en las páginas multiusuario
  $destino = 'avatares/' .uniqid() .'_' . basename($_FILES['avatar']['name']);



    if(move_uploaded_file($_FILES['avatar']['tmp_name'], $destino)){
      echo 'Archivo subido correctamente';
    }
    else{
      echo 'Error al subir el archivo';
    }

?>
