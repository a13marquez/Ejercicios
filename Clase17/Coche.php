<?php
  class Coche{
    #Propiedades
    var $color;
    var $velocidad;
    var $posx;
    var $posy;
    var $num_ruedas= 4;

    #METODOS (acciones)

    //Metodo constructor
    function __construct($col, $px, $py){
      $this->velocidad = 0;
      $this->color = $col;
      $this->posx = $px;
      $this->posy = $py;

    }

    function acelerar(){
      //Para indicar la propiedad del objeto se usa una flecha
      $this->velocidad += 10;
    }

    function frenar(){
      if ($this->velocidad < 10){
        $this->velocidad = 0;
      }else{
        $this->velocidad -= 10;
      }
    }
  }

  $coche1 = new Coche('Rojo', 100, 50);
  $coche1->acelerar();
  $coche1->acelerar();

  $coche2 = new Coche('Azul', 75, 75);
  $coche2->acelerar();
  $coche2->frenar();

  echo $coche1->velocidad . '<br>';
  echo 'Coche2: ' . $coche2->velocidad;
?>
