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

Route::get('/', function()
{
	return View::make('hello');
});

/*
Route::get('crearusuario', function(){
	return "Url crearusuario";
});

Route::get('actualizarusuario/{id_usuario}', function($id_usuario){
	return "Url actualizarusuario".$id_usuario;
});

Route::get('detalleusuario/{id_usuario}', function($id_usuario){
	return "Url detalleusuario".$id_usuario;
});

Route::get('usuario/{id_usuario}/crearcontacto', function($id_usuario){
	//return "Url crearcontacto".$id_usuario;
	return Redirect::to('usuario/1/listarcontactos');
});

Route::get('usuario/{id_usuario}/actualizarcontacto/{id_contacto}', function($id_usuario, $id_contacto){
	return "Url actualizarcontacto".$id_usuario." ".$id_contacto;
});

Route::get('usuario/{id_usuario}/eliminarcontacto/{id_contacto}', function($id_usuario, $id_contacto){
	return "Url eliminarcontacto".$id_usuario." ".$id_contacto;
});

Route::get('usuario/{id_usuario}/listarcontactos', function($id_usuario){
	return "Url listarcontactos".$id_usuario;
});

Route::get('usuario/{id_usuario}/detallecontacto/{id_contacto}', function($id_usuario, $id_contacto){
	return "Url detallecontacto".$id_usuario." ".$id_contacto;
});

*/

Route::get('crearusuario','UsuarioController@crearusuario');
Route::get('actualizarusuario','UsuarioController@actualizarusuario');
Route::get('detalleusuario/{id_usuario}','UsuarioController@detalleusuario');

Route::get('usuario/{id_usuario}/crearcontacto','ContactoController@crearcontacto');
Route::get('usuario/{id_usuario}/actualizarcontacto/{id_contacto}','ContactoController@actualizarcontacto');
Route::get('usuario/{id_usuario}/eliminarcontacto/{id_contacto}','ContactoController@eliminarcontacto');
Route::get('usuario/{id_usuario}/listarcontactos','ContactoController@listarcontactos');
Route::get('usuario/{id_usuario}/detallecontacto/{id_contacto}','ContactoController@detallecontacto');

Route::get('Usuario/Consultar/', array('as' => 'UsuarioConsultar', 'uses' => 'UsuarioController@listarusuario'));
Route::get('Usuario/Agregar/', array('as' => 'UsuarioAgregar', 'uses' => 'UsuarioController@agregarusuario'));