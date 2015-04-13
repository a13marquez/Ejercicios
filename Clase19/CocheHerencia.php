<?php
//La función autoload se usa para cargar clases que aun no se han creado

/*class Vehiculo{
  private $velocidad;
  public public function acelerar(){
    $this->velocidad += 5;
  }
}*/
  class CocheHerencia{
    #Propiedades
    private $color;
    private $velocidad;
    private $posx;
    private $posy;
    private $num_ruedas= 4;

    #METODOS (acciones)

    //Metodo constructor
    function __construct($col, $px, $py){
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
    public function getVelocidad(){
      return $this->velocidad;
    }
  }

  /*$coche1 = new CocheHerencia('Rojo', 100, 50);
  $coche1->acelerar();
  $coche1->acelerar();

  $coche2 = new CocheHerencia('Azul', 75, 75);
  $coche2->acelerar();
  $coche2->frenar();

  echo $coche2->getColor() . '<br>';
  $coche2->setColor('Amarillo');
  echo $coche2->getColor();*/
?>
