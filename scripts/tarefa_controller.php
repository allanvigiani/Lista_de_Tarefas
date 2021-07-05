<?php

    require "../private/tarefa.model.php";
    require "../private/tarefa.service.php";
    require "../private/database/connection.php";
    
    if ($_POST['tarefa'] == '') {

        header('Location: ../public/nova_tarefa.php?field=empty');

    } else {

        // Instanciando objetos
        $conexao = new Connection();

        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $tarefa_service = new TarefaService($conexao, $tarefa);
        $tarefa_service->inserir();

        header('Location: ../public/nova_tarefa.php?inclusao=success');

    }    

?>