<?php
  class ProductoController extends BaseController{
    public function index(){
      $productos = Producto::all();
      return View::make('index')->with('productos', $productos)
    }
  }

 ?>
