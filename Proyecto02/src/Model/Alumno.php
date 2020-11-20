<?php
namespace Geeks\Model;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Alumno extends DB{

    function __construct(){
        parent::__construct();
        parent::setDB('clases');
    }

    public function insert($nombre,$apellido1,$apellido2,$correo,$convocatoria,$proyecto){
        $insert="INSERT INTO alumnos(id, nombre,apellido1,apellido2,correo,convocatoria,proyecto) VALUES 
        (NULL,
        '$nombre',
        '$apellido1',
        '$apellido2',
        '$correo',
        '$convocatoria',
        '$proyecto')";
        return $this->conector->query($insert);
    }

    public function all(){
        $consulta="SELECT * FROM alumnos";
        return $this->conector->query($consulta);
    }

    public function alumno($id){
        $consulta="SELECT * FROM alumnos where id=$id";
        return $this->conector->query($consulta);
    }
}