<?php
  class Coche{
    #Propiedades
    var $color;
    var $velocidad;
    var $posx;
    var $posy
    var $num_ruedas= 4;

    #METODOS (acciones)
    function acelerar(){
      $velocidad +=10;
    }
  }
?>
