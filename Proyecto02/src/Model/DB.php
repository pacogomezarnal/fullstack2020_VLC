<?php
namespace Geeks\Model;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class DB{

    //Variables de configuracion del servidor
    private $servidor="localhost";
    private $db="";
    private $user="root";
    private $pass="";
    //Variable de conexion
    public $conector;
    //Logger
    private $logger;

    function __construct()
    {
        // Create the logger
        $this->logger = new Logger('geeks');
        $this->logger->pushHandler(new StreamHandler('php://stdout', Logger::INFO));
        $this->logger->info('DB creado');

    }

    function setDB($db,$user="root",$pass="",$servidor="localhost"){
        $this->conector = new \mysqli($servidor,$user,$pass,$db);
        if ($this->conector->connect_errno) {
            $this->logger->error("Fallo al conectar a MySQL: (" . $this->conector->connect_errno . ") " . 
            $this->conector->connect_error);
        }
    }
}

