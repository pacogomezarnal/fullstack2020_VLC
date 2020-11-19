<?php
class Cerveza{
    //Propiedades
    public $graduacion=5.4;
    public $marca="Turia";
    private $graduacionReal;
    //Constructor
    function __construct($marca)
    {
        $this->marca=$marca;
        $this->graduacionReal=$this->graduacion;
    }
    //Funciones
    function nombreCerveza(){
        return "<div class='cerveza'>Nombre de la cerveza: ".$this->marca."</div>";
    }
}