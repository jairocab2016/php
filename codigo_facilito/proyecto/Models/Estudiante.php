<?php namespace Models;
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/03/17
 * Time: 23:16
 */

class Estudiante{

    private $id;
    private $nombre;
    private $edad;
    private $promedio;
    private $imagen;
    private $id_seccion;
    private $fecha;
    private $con;

    public function __construct(){
        $this->con = new Conexion();
    }

    public function listar(){

        $sql = "select t1.*, t2.nombre as nombre_seccion from estudiantes t1 inner join secciones t2 on t1.id_seccion = t2.id";
        $datos = $this -> con ->consultaRetorno($sql);
        return $datos;
    }

    public function add(){

        $sql = "insert into estudiantes(id, nombre, edad, promedio, imagen, id_seccion, fecha) 
                  values (null, '{$this -> nombre}', '{$this->edad}', '{$this->promedio}', '{$this -> imagen}',
                  '{$this->id_seccion}', NOW())";

        $this -> con -> consultaSimple($sql);

    }

    public function delete(){
        $sql = "delete from estudiantes where id = '{$this->id}'";
        $this->con->consultaSimple($sql);
    }

    public function edit(){
        $sql = "update from estudiantes set nombre = '{$this->nombre}', edad = '{$this->edad}',  promedio = '{$this->promedio}', id_seccion = '{$this->id_seccion}' where id = '{$this->id}'";
        $this->con->consultaSimple($sql);
    }

    public function view(){
        $sql = "select t1.*, t2.nombre as nombre_seccion from estudiantes t1 inner join secciones t2
                on t1.id_seccion = t2.id where id = '{$this->id}'";
        $datos = $this->con->consultaRetorno($sql);
        return $datos;
    }
}

?>