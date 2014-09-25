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

		public function listarusuario(){
			/*
			$usuario = User::find($id_usuario);
			$contactos = $usuario->contacto;
			//return $contactos;
			return View::make('Contacto.listarcontactos', array('datos' => $contactos, 'usuario' => $usuario));
			*/
			$usuario = User::all();
			return View::make('User.listarusuarios', array('datos' => $usuario));
		}

		public function get_AgregarUsuario(){
			return View::Make('User.AgregarUsuario');
		}

		public function post_AgregarUsuario(){
			$inputs = Input::all();
			$reglas = array(
				'txtNombres' => 'required',
				'txtApellidos' => 'required',
				'txtDUI' => 'required|min:9|unique:usuarios,dui',
				'txtContrasenha' => 'required|min:5|max:20',
			);
			$mensajes = array(
				'required' => 'Campo obligatorio',
				'unique' => 'Usuario ya registrado',
			);

			$validar = Validator::make($inputs, $reglas, $mensajes);

			if($validar->fails()){
				return Redirect::back()->withErrors($validar);
			}
			else{
				$usuario = new User;
				$usuario->nombres = Input::get('txtNombres');
				$usuario->apellidos = Input::get('txtApellidos');
				$usuario->dui = Input::get('txtDUI');
				$usuario->contrasenha = Hash::make(Input::get('txtContrasenha'));
				$usuario->save();
				return Redirect::to('Usuario/Consultar/');
			}

		}

		public function UsuarioEditar($id_usuario){
			$usuario = User::find($id_usuario);
			if(Request::isMethod('get')){
				return View::make('User.EditarUsuario', array('datos' => $usuario));
			}
			elseif (Request::isMethod('post')) {
				$inputs = Input::all();
				$reglas = array(
					'txtNombres' => 'required',
					'txtApellidos' => 'required',
				);
				$mensajes = array(
					'required' => 'Campo obligatorio',
					'unique' => 'Usuario ya registrado',
				);

				$validar = Validator::make($inputs, $reglas, $mensajes);
				
				if($validar->fails()){
					return Redirect::back()->withErrors($validar);
				}
				else{
					$usuario = User::find(Input::get('hdnID'));
					$usuario->nombres = Input::get('txtNombres');
					$usuario->apellidos = Input::get('txtApellidos');
					$usuario->save();
					return Redirect::to('Usuario/Consultar/');
				}
			}
		}

		public function UsuarioEliminar($id_usuario){
			$usuario = User::find(Input::get('hdnID'));
			$usuario->delete();
			return Redirect::to('Usuario/Consultar/');
		}

	}
?>