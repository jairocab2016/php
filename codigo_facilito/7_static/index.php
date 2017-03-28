<?php

	class Pagina{

		//atributos
		public $nombre= "Codigo Facilito";
		public static $url= "www.codigofacilito.com";

		//metodos
		public function bienvenida(){
			echo "Bievenidos a <b> " . $this->nombre . "</b> la pagina es <b>" . self::$url . "<b><br>";
		}

		public static function bienvenida2(){
			echo "Bienvenidos " . self::$url;
		}		

	}

	class Web extends Pagina{

	}

	//$persona =  new Pagina();
	//$persona -> bienvenida();

	//Pagina::bienvenida2();
	Web::bienvenida2();


?>