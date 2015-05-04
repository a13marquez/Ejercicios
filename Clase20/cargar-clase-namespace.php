<?php
namespace MisLibrerias;
  /*spl_autoload_register(function($clase){
      include $clase . '.php';
  });*/
  include 'CocheNamespace.php';
  $coche1 = new Clases\CocheHerencia('Rojo', 25, 75);
  $coche1->acelerar();
  $coche1->getVelocidad();
  echo $coche1->getVelocidad() . ' desde cargar MisLibrerias';
?>
