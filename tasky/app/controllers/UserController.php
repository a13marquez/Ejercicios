<?php
  /**
   *
   */
  class UserController extends BaseController{
    public function getRegistro(){
      return View::make('registro');
    }
    public function getLogin(){
      return View::make('login');
    }
    public function getLogout()
    {
      Auth::logout();
      return Redirect::to('login');
    }

    public function postRegistro(){
        if (Input::get('pass') === Input::get('pass2')){
          $usuario = new User();
          $usuario->email = Input::get('email');
          $usuario->password = Hash::make(Input::get('pass'));
          $usuario->save();
        }
        return Redirect::to('login');
    }
    public function postLogin(){
      if (Auth::attempt(array('email'=>Input::get('email'),Input::get('pass')),Input::get('recordar') )) {
          return Redirect::to('lista');
      }
      return Redirect::to('registro');
    }
  }

 ?>
