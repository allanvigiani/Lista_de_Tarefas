<?php

    require "../private/tarefa.model.php";
    require "../private/tarefa.service.php";
    require "../private/database/connection.php";

    // Instanciando objetos
    $conexao = new Connection();    
    $tarefa = new Tarefa();
    
    // Verifica se o get está setado
    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    $acao = 'listar_pendetes';
    
    if ($acao == 'inclusao') {

        if ($_POST['tarefa'] == '') {

            header('Location: ../public/nova_tarefa.php?field=empty');
    
        } else {

            $tarefa->__set('tarefa', $_POST['tarefa']);
    
            $tarefa_service = new TarefaService($conexao, $tarefa);
            $tarefa_service->inserir();
    
            header('Location: ../public/nova_tarefa.php?inclusao=success');
    
        }  

    }else if ($acao == 'listar') {
        
        $tarefa_service = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefa_service->recuperar(); // Retorno do método recuperar()

    }else if ($acao == 'listar_pendentes') {

        $tarefa_service = new TarefaService($conexao, $tarefa);
        $tarefas_pendentes = $tarefa_service->recuperar(); // Retorno do método recuperar()
       
    }
      
?>