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
Route::get('/', 'ProductoController@getIndex');
Route::get('nuevo-producto', 'ProductoController@getNuevoProducto');

### RUTAS POST
Route::post('nuevo-producto', 'ProductoController@postNuevoProducto');
