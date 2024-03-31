<?php

class TarefaService
{
    private $conexao;
    private $tarefa;

    public function __construct(Conexao $conexao, Tarefa $tarefa)
    {
        $this->conexao = $conexao->conectar();
        $this->tarefa = $tarefa;
    }

    public function inserir()
    {
        $query = '
            INSERT INTO tb_tarefas(tarefa)values(:tarefa)
        ';

        $stmt = $this->conexao->prepare($query);

        $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
        $stmt->execute();
    }

    public function recuperar()
    {
        $query = '
            SELECT t.id, s.status, t.tarefa 
            FROM tb_tarefas as t
            LEFT JOIN tb_status as s ON (t.id_status = s.id)
        ';

        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function atualizar()
    {

    }

    public function remover()
    {

    }
}