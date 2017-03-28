<?php 

	class Persona{

		//atributos
		public $nombre = "Pedro";

		//metodos

		public function hablar($mensaje){
			echo $mensaje;

		}
	}


	$persona = new Persona();
	//echo $persona -> nombre;
	$persona ->hablar("Saludo desde codigo facilito");
?>