<?php
Route::pattern('id', '[0-9]+');


Route::any('/', function(){return View::make('index');});

Route::get('api/{appid?}/{id?}', 'TaskController@getApi');
Route::get('prueba', function(){
  return View::make('prueba');
});

Route::group(array('before'=>'guest '), function(){
  Route::get('registro', 'UserController@getRegistro');
  Route::get('login','UserController@getlogin');
  Route::get('recordar','RemindersController@getRemind');
  Route::get('recuperar/{token}','RemindersController@getReset');
});

Route::group( array('before'=>'auth'),function (){
  Route::get('lista','TaskController@getLista');
  Route::get('iniciar/{id}','TaskController@getIniciar');#->where('id', '[0-9]+');
  Route::get('completar/{id}','TaskController@getCompletar');#->where('id', '[0-9]+');
  Route::get('eliminar/{id}','TaskController@getEliminar');#->where('id', '[0-9]+');
  });

Route::group(array('before'=>'guest|csrf'), function(){
  Route::post('registro','UserController@postRegistro');
  Route::post('login','UserController@postLogin');
  Route::post('recordar','RemindersController@postRemind');
  Route::post('recuperar', 'RemindersController@postReset');
});

Route::group(array('before' =>'auth|csrf'), function(){
  Route::post('nueva','TaskController@postNueva');
});

Route::get('idioma/{idioma}', function($id){
  Session::put('lang', $id);
    return Redirect::back();
  })->where('idioma', '[a-z]+');
  /*
  Cambiar idioma con cookies
  Route::get('idioma/{id}', function($id){
    Cookie::make('lang', $id, 525600);
    return Redirect::back();
  });
  */
