<?php
namespace Geeks\Model;

class DB{

    //conexion
    public $conector;

    function __construct(){
        $this->conector = new \mysqli("localhost","root","","clases");
    }

}
