<?php
  class ProductoController extends BaseController{
    public function getIndex(){
      $productos = Producto::all();
      return View::make('index')->with('productos', $productos);
    }

    public function getNuevoProducto(){
      return View::make('nuevo');
    }

    public function getBorrar($id = null){
      if (isset($id)){
        $producto = Producto::find($id);
        $producto->delete();
        return Redirect::to('/');
      }
    }

    public function getEditar($id = null){
      if (isset($id)){
        $producto = Producto::find($id);
        return View::make('editar')->with('producto', $producto);
      }
      return Redirect::to('/');
    }
    public function postNuevoProducto(){
      $producto = new Producto();

      ### Recogida de datos
      $producto->nombre = Input::get('nombre');
      $producto->marca = Input::get('marca');
      $producto->precio = Input::get('precio');
      $producto->stock = Input::get('stock');

      ### Guardamos el producto
      $producto->save();

      return Redirect::to('/');
    }

    public function postEditar(){
      $producto= Producto::find(Input::get('id'));
      $producto->nombre = Input::get('nombre');
      $producto->marca = Input::get('marca');
      $producto->precio = Input::get('precio');
      $producto->stock = Input::get('stock');

      $producto->save();

      return Redirect::to('/');
    }
  }
 ?>
