<?php namespace Models;
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/03/17
 * Time: 23:16
 */

class Conexion{

    private $datos = array(
      "host" => "localhost",
      "user" => "root",
      "pass" => "carter",
      "db" => "proyecto"
    );

    private $con;

    public function __construct(){
        $this -> con =  new \mysqli($this -> datos['host'], $this -> datos['user'],
            $this -> datos['host'], $this -> datos['pass'], $this -> datos['db']);
    }

    public function consultaSimple($sql){
        $this -> con ->query($sql);
    }

    public function consultaRetorno($sql){
        $datos = $this -> con -> query($sql);
        return $datos;
    }
}

?>