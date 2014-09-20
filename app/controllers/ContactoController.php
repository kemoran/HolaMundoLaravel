<?php
	class ContactoController extends BaseController{

		public function crearcontacto($id_usuario){
			$usuario = User::find($id_usuario);
			$contacto = new Contacto;
			$contacto->nombre = 'Binda Gonzalez';
			$contacto->telefono = '77470078';
			$contacto->correo_electronico = 'binda.gonzalez@catolica.edu.sv';
			$contacto->direccion = 'Calle 15 de Septiembre #12, Metapán';
			$contacto->usuario()->associate($usuario);
			$contacto->save();
		}

		public function actualizarcontacto($id_usuario,$id_contacto){
			$contacto = Contacto::find($id_contacto);
			$contacto->nombre = 'Paulino Morán';
			$contacto->correo_electronico = 'paulino.moran2@calzadoideal.com';
			$contacto->save();
		}

		public function eliminarcontacto($id_usuario,$id_contacto){
			$usuario = User::find($id_usuario);
			$contacto = Contacto::find($id_contacto);
			$contacto->delete();
		}

		public function listarcontactos($id_usuario){
			$usuario = User::find($id_usuario);
			$contactos = $usuario->contacto;
			//return $contactos;
			return View::make('Contacto.listarcontactos', array('datos' => $contactos, 'usuario' => $usuario));
		}

		public function detallecontacto($id_usuario,$id_contacto){
			$contacto = Contacto::find($id_contacto);
			/*
			return 'Nombre: '.$contacto->nombre.
			' Telefono: '.$contacto->telefono.
			' Correo electronico: '.$contacto->correo_electronico.
			' Dirección: '.$contacto->direccion;
			*/
			return View::make('Contacto.detallecontacto', array('dato' => $contacto));
		}

	}
?>