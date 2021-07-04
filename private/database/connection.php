<?php

class Connection {

    private $dsn = 'pgsql:host=localhost; port=5432; dbname=lista_tarefas';
    private $user = 'postgres';
    private $password = '123456';

    public function conectar(){
        try{

            $pdo = new PDO("$this->dsn", "$this->user", "$this->password");
            
            return $pdo;

        }catch (PDOException $error){

            echo "Error: ". $error->getCode() . "<br> Mensagem: " . $error->getMessage();
            die();

        }
    }

};

?>