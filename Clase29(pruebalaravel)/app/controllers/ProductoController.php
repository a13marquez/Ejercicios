<?php
  class ProductoController extends BaseController{
    public function getIndex(){
      $productos = Producto::all();
      return View::make('index')->with('productos', $productos);
    }

    public function getNuevoProducto(){
      return View::make('nuevo');
    }


  }
?>
