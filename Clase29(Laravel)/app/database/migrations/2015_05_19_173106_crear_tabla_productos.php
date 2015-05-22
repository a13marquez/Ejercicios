<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProductos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function($tabla){
				$tabla->increments('id');
				$tabla->string('nombre');
				$tabla->string('marca');
				$tabla->float('tabla');
				$tabla->integer('stock');
				$tabla->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$schema::drop('productos');
	}

}
