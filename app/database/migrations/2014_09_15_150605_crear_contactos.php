<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearContactos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contactos',function($tabla){
			$tabla->increments('id');
			$tabla->string('nombre',50);
			$tabla->string('telefono',9);
			$tabla->string('correo_electronico',50);
			$tabla->string('direccion',200);
			$tabla->integer('usuario_id')->unsigned();
			$tabla->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
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
		Schema::drop('contactos');
	}

}
