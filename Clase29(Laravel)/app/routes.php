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
Route::get('/', '');

/*
Route::get('prueba', function()
{
// Se mueve a homecontroller (en ejercicios) para mejorar la organización del archivo de rutas
	$usuarios = array('David', 'Álvaro', 'Marta', 'María');
	return View::make('index')->with('usuarios', $usuarios);
});
*/
