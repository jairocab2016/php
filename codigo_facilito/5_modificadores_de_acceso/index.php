<?php 

	class Facebook{

		//atributos
		public $nombre;
		public $edad;
		private $pass;

		//metodos
		public function __construct($nombre, $edad, $pass){
			$this->nombre= $nombre;
			$this->edad= $edad;
			$this->pass= $pass;
		}

		public function verInformacion(){
			echo "Nombre: ". $this->nombre . "<br>";
			echo "Edad: ". $this->edad . "<br>";
			self::cambiarPass("54321");
			echo "Password: ". $this->pass . "";

		}

		private function cambiarPass($pass){
			$this->pass = $pass;

		}

	}

	$facebook = new Facebook("jairo",25,"1234");
	//$facebook ->verInformacion();
	//echo $facebook ->edad;
	$facebook->cambiarPass("1234");
	$facebook->verInformacion();



 ?>