<?php
  //lo normal es comprobar antes la cookie
  if(isset($_COOKIE['veces'])){
    echo $_COOKIE['veces'];
    //Las cookies se pueden modificar con setcookie
    //setcookie('idioma','', time() - 1); Con esto se elimina la cookie
  };

?>
