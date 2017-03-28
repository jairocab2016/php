<?php

	class Vehiculo{

		//atributos
		public $motor= false;
		public $marca;
		public $color;

		//metodos
		public function estado(){
			if ($this->motor){
				echo "El motor esta encendido <br>";
			}else{
				echo "El motor esta apagado <br>";
			}
		}

		public function enceder(){
			if ($this->motor) {
				echo "Cuidado, el motor ya esta prendido";
			}else{
				$this->motor=true;
				echo "El motor ahora esta encendido <br>";
				
			}
		}


	}

	class Moto extends Vehiculo {

		public function estadoMoto(){
			$this->estado();
		}

	}


	class CuatriMoto extends Moto{

	}

	//$moto1 =  new Moto();
	//$moto1 -> estadoMoto();

	$moto = new CuatriMoto();
	$moto -> estado();


 ?>