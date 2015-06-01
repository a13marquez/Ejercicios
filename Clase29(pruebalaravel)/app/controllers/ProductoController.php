<?php
  class ProductoController extends BaseController{
    public function getIndex(){
      $productos = Producto::all();
      return View::make('index')->with('productos', $productos);
    }

    public function getNuevoProducto(){
      return View::make('nuevo');
    }
    public function postNuevoProducto(){
      $producto = new Producto();

      $producto->nombre=Input::get('nombre');
      $producto->marca=Input::get('marca');
      $producto->precio=Input::get('precio');
      $producto->stock=Input::get('stock');

      $producto->save();

      return Redirect::to('/');
    }


  }
?>
