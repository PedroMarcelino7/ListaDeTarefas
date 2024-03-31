<?php

require "classes/tarefa.model.php";
require "classes/tarefa.service.php";
require "classes/conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'inserir') {
    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->inserir();

    header('Location: nova_tarefa.php?inclusao=1');
} else if ($acao == 'recuperar') {
    echo 'chegamos até aqui';
}