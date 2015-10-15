<?php


Route::get('/', function(){return View::make('index');});
Route::get('registro',array('before'=>'guest ', 'uses'=>'UserController@getRegistro'));
Route::get('login',array('before'=>'guest', 'uses'=>'UserController@getlogin'));
Route::get('lista',array('before'=>'auth','uses'=>'TaskController@getLista'));
Route::get('iniciar/{id}',array('before'=>'auth','uses'=>'TaskController@getIniciar'));
Route::get('completar/{id}',array('before' =>'auth','uses'=>'TaskController@getCompletar'));
Route::get('eliminar/{id}',array('before' =>'auth','uses'=>'TaskController@getEliminar'));
Route::get('recordar',array('before' =>'guest','uses'=>'RemindersController@getRemind'));
Route::get('recuperar/{token}', array('before' =>'guest','uses'=>'RemindersController@getReset'));
Route::get('idioma/{id}', function($id){
  Session::put('lang', $id);
  return Redirect::back();
});
/*
Cambiar idioma con cookies
Route::get('idioma/{id}', function($id){
  Cookie::make('lang', $id, 525600);
  return Redirect::back();
});
*/

Route::post('registro' ,array('before'=>'guest|csrf', 'uses'=>'UserController@postRegistro'));
Route::post('login',array('before'=>'guest|csrf', 'uses'=> 'UserController@postLogin'));
Route::post('nueva',array('before' =>'auth|csrf','uses'=>'TaskController@postNueva'));
Route::post('recordar', array('before' =>'guest|csrf','uses'=>'RemindersController@postRemind'));
Route::post('recuperar', array('before' =>'guest|csrf','uses'=>'RemindersController@postReset'));
