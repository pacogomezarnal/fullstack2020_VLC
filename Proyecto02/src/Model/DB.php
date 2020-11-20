<?php
namespace Geeks\Model;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class DB{
    //Variables de conexion
    public $servidor;
    //conexion
    public $conector;
    //Logger
    private $logger;

    function __construct($servidor="localhost"){
        $this->servidor=$servidor;
        $this->logger=new Logger("geeks");
        $this->logger->pushHandler(new StreamHandler('php://stdout', Logger::INFO));
        $this->logger->pushHandler(new StreamHandler(__DIR__.'../../var/log.txt', Logger::INFO));
        $this->logger->info("PROYECTO 2 - DB CONECTADA");
        $this->conector = new \mysqli($this->servidor,"root","","clases");
    }

}
