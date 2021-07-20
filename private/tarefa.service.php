<?php

//CRUD
class TarefaService {

    private $conexao;
    private $tarefa;

    public function __construct(Connection $conexao, Tarefa $tarefa){

        $this->conexao = $conexao->conectar();
        $this->tarefa = $tarefa;
        
    }
    
    public function inserir(){

        $query = "
            INSERT INTO tarefas (tarefa) VALUES (:tarefa);
        ";

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(":tarefa", $this->tarefa->__get('tarefa'));
        $stmt->execute();

    }

    public function remover(){

    }

    public function recuperar(){

        $query = "
            SELECT 
                tarefas.id,
                status.status,
                tarefas.tarefa
            FROM tarefas
                LEFT JOIN status on tarefas.id_status = status.id;
        ";

        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public function atualizar(){

    }

};
 
?>