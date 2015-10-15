<?php
  class UserController extends BaseController{
    public function getRegistro(){
      return View::make('registro');
    }
    public function getLogin(){
      return View::make('login');
    }

    public function postRegistro(){
        $reglas = array(
          'email'=>'required|email',
          'pass'=>'required|min:8'
        );
        $mensajes = array(
          'required' => 'El campo :attribute es obligatorio.',
          'email' => 'El campo ::attribute debe contener una dirección de email válida',
          'min' => 'La ::attribute tiene que tener al menos :min caracteres'
        );
        $validacion = Validator::Make(Input::all(), $reglas, $mensajes);

        if($validacion->fails()){
          return Redirect::to('registro')->withErrors($validacion);
        }
        if(Input::get('pass') === Input::get('pass2')){
          $usuario = new User();
          $usuario->email = Input::get('email');
          $usuario->password = Hash::make(Input::get('pass'));
          $usuario->save();
        }
        return Redirect::to('login');
    }

    public function postLogin(){
        if(Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('pass')))){
          return Redirect::to('lista');
        }
        return Redirect::to('login');

    }
  }

 ?>
