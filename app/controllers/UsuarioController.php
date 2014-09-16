<?php
	class UsuarioController extends BaseController{

		public function CrearUsuario(){
			$usuario = new User;
			$usuario->nombres = 'Binda Presedy';
			$usuario->apellidos = 'Gonzalez Osorio';
			$usuario->dui = '111111112';
			$usuario->contrasenha = '1234';
			$usuario->save();
		}

		public function actualizarusuario($id_usuario){
			$usuario = User::find($id_usuario);
			$usuario->nombres = 'Kevin Eduardo';
			$usuario->apellidos = 'Morán Ramirez';
			$usuario->save();
		}

		public function detalleusuario($id_usuario){
			$usuario = User::find($id_usuario);
			//return 'Mis nombres y apellidos son: '.$usuario->nombres.' '.$usuario->apellidos;
			return View::make('User.detalleusuario', array('dato' => $usuario));
		}

	}
?>