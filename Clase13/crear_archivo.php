<?php
  //Primero se comprueba si existe la carpeta en la que queremos escribir. El límite
  //de busqueda de archivos y carpetas es la carpeta pública, aunque se pueden dar permisos
  //para escribir fuera de esa carpeta
  if(!is_dir('config')){
    mkdir('config');
  }
  //Al crear un archivo se guarda en formato de texto plano, a no ser que especifiquemos otro
  //formato
  //fopen(ruta, 'modo')
  $archivo = fopen('config/config.php', 'a');
  fwrite($archivo, "<php \r\n");
  $veces = 1;
  while ($veces <10){
    fwrite($archivo, '$Repeticion'. $veces++.  "; \r\n");
  }
  fclose($archivo);
?>
