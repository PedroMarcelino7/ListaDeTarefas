<?php

require "classes/tarefa.model.php";
require "classes/tarefa.service.php";
require "classes/conexao.php";

echo '<pre>';
print_r($_POST);
echo '</pre>';

$tarefa = new Tarefa();
$tarefa->__set('tarefa', $_POST['tarefa']);

$conexao = new Conexao();

$tarefaService = new TarefaService($conexao, $tarefa);
$tarefaService->inserir();

echo '<pre>';
print_r($tarefaService);
echo '</pre>';