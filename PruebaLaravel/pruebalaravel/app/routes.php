<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get('/', function()
{
	return View::make('hello');
});
Esta ruta se puede sustituor por una llamada a un método del controlador:
Route::get('/', 'HomeController@showWelcome');
Route::get('prueba', 'HomeController@inicio');
*/

#### RUTAS GET
Route::get('/', 'ProductoController@getIndex');//Invitados y registrados
Route::get('nuevo-producto', array('before'=>'auth|csrf', 'uses'=>'ProductoController@getNuevoProducto'));//Registrados
Route::get("borrar/{id}", array('before'=>'auth|csrf','uses'=>'ProductoController@getBorrar'));//Registrados
Route::get("editar/{id}", array('before'=>'auth|csrf', 'uses'=>'ProductoController@getEditar'));//Registrados
Route::get('registro', array('before'=>'guest','uses'=>'UserController@getRegistro'));//Invitado
Route::get('login', array('before'=>'guest','uses'=>'UserController@getLogin'));//Invitado
Route::get('logout', array('before'=>'auth', 'uses'=>'UserController@getLogout'));
### RUTAS POST
Route::post('nuevo-producto',array('before'=>'auth|csrf', 'uses'=>'ProductoController@postNuevoProducto'));//Registrados
Route::post('editar', array('before'=>'auth|csrf', 'uses'=>'ProductoController@postEditar'));//Registrados
Route::post('registro', array('before'=>'guest','uses'=>'UserController@postRegistro'));//Invitado
Route::post('login', array('before'=>'guest','uses'=>'UserController@postLogin'));//Invitado
