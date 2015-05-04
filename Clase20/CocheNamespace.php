<?php
/*Las interfaces son similares a otros lenguajes de programación.
  los espacios de nombres aparecieron en la version 5.3 de PHP. Los espacios de nombres
  se utilizan para encapsular elementos, como hacen por ejemplo los directorios linux o
  carpetas de windows. Podemos tener dos archivos iguales en dos diretorios distintos, pero
  no en el mismo. Ademas para acceder a un archivo desde el exterior del espacio de nombres
  hay que acceder a el utilizando la ruta completa del espacio de nombres.
  Solo se ven afectados por espacios de nombres clases, interfaces, constantes y funciones.
  Se declaran con la palabra clave namespace y tienen que ir al inicio del archivo (exceptuando
  declare, que iria antes).
  Se puede usar el mismo espacio de nombres en varios archivos (como en .NET).
  No es aconsejable usar más de un espacio de nombres en el mismo fchero.
*/
namespace MisLibrerias\Clases;


  class CocheHerencia {
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

  namespace MisClases
  class CocheHerencia {
    #Propiedades
    private $color;
    private $velocidad;
    private $posx;
    private $posy;
    private $num_ruedas= 4;
?>
