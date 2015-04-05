<?php
  define('SALT', 'fd15HkJ625Hud8Uid34tGhdGHK23K4mn5');
  $pass = 'holamundo01';
  /*Para cifrar con password_hash hay que pasar la contraseña, la constante y las ociones que se
    pasan en forma de array.
    Hay que añadir una clave de cifrado (salt) porque si no el cifrado cambia.
    Esta salt es una combinacion de letras y números, de como mínimo 22 caracteres
  */
  $passCifrada = password_hash($pass, PASSWORD_DEFAULT,
  array('salt'=>SALT));
  echo $passCifrada;
?>
