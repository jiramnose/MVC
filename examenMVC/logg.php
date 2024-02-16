<?php

class Log {

    private $fileLog;

    function __construct($path)
    {
        $this->fileLog = fopen($path, "a");
    }

    function writeLine($type, $message){
        $date = new DateTime();
        fputs($this->fileLog, "[".$type."][".$date->format("d-m-Y H:i:s")."]: ". $message . "\n");
    }

    function close(){
        fclose($this->fileLog);
    }

}

$log = new Log("log.txt");

    /*if(){*/
        $log->writeLine("Aviso", "Ha habido un error inesperado");
    /*}*/
    /*if(){*/
        $log->writeLine("Advertencia", "Ha habido un error inesperado");
    /*}*/
    /*if(){*/
        $log->writeLine("Error", "Ha habido un error inesperado");
    /*}*/


$log->close();

?>