<?php



  class CochePermisos extends Vehiculo{
    #Propiedades
    private $color;
    private $velocidad;
    private $posx;
    private $posy;
    private $num_ruedas= 4;

    #METODOS (acciones)

    //Metodo constructor
    public function __construct($col, $px, $py){
      $this->velocidad = 0;
      $this->color = $col;
      $this->posx = $px;
      $this->posy = $py;

    }

    public function acelerar(){
      //Para indicar la propiedad del objeto se usa una flecha
      $this->velocidad += 10;
    /*  parent :: acelerar();
      return $this->velocidad */
    }

    public function frenar(){
      if ($this->velocidad < 10){
        $this->velocidad = 0;
      }else{
        $this->velocidad -= 10;
      }
    }

    public function getColor(){
      return $this->color;
    }
    public function setColor($col){
      $this->color = $col;
    }
    public function getNumRuedas(){
      return $this->num_ruedas;
    }
  }

  /*$coche1 = new Coche('Rojo', 100, 50);
  $coche1->acelerar();
  $coche1->acelerar();

  $coche2 = new Coche('Azul', 75, 75);
  $coche2->acelerar();
  $coche2->frenar();

  echo $coche2->getColor() . '<br>';
  $coche2->setColor('Amarillo');*/
  echo $coche2->getColor();
?>
