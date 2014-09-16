<?php
	class Contacto extends Eloquent {

		public function usuario(){
			return $this->belongsTo('User');
		}

	}
?>