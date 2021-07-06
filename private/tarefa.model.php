<?php

class Tarefa {
    
    private $id;
    private $id_status;
    private $tarefa;
    private $data_cadastrado;

    public function __get($atrib){
        return $this->$atrib;
    }

    public function __set($atrib, $value){
        $this->$atrib = $value;
    }

};
// Esse fica
?>