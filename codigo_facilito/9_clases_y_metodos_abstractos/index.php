<?php

    abstract class Molde{

        abstract public function ingresarNombre($nombre);
        abstract public function obtnerNombre();

    }

    class Persona extends Molde{

        private $mensaje = "Hola gente de codigo facilito";
        private $nombre;

        public function mostrar(){
            print $this->mensaje;
        }

        public function ingresarNombre($nombre, $username = "cf"){
            $this->nombre = $nombre . $username;
        }

        public function obtnerNombre()
        {
            print $this->nombre;
        }
    }

    $obj =  new Persona();
    $obj->ingresarNombre("jairo", "Cardozo");
    //$obj ->mostrar();
    $obj -> obtnerNombre();