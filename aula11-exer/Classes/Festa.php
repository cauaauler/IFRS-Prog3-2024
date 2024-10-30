<?php

class Festa implements ActiveRecord
{

    private int $id;
    private string $nome;
    private string $endereco;
    private string $cidade;
    private string $dia;

    public function __construct(string $nome, string $endereco, string $cidade, string $dia)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->dia = $dia;
    }
    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    public function getEndereco(): string
    {
        return $this->endereco;
    }
    public function getCidade(): string
    {
        return $this->cidade;
    }
    public function getDia(): string
    {
        return $this->dia;
    }

    public function save(): bool
    {
        $conexao = new MySQL();
        if (isset($this->id)) {
            $sql = "UPDATE festas SET nome = '{$this->nome}' ,endereco = '{$this->endereco}' ,cidade = '{$this->cidade}' ,dia = '{$this->dia}' WHERE id = {$this->id}";
        } else {
            $sql = "INSERT INTO festas (nome,endereco,cidade,dia) VALUES ('{$this->nome}','{$this->endereco}','{$this->cidade}','{$this->dia}')";
        }
        return $conexao->executa($sql);
    }
    public function delete(): bool
    {
        $conexao = new MySQL();
        $sql = "DELETE FROM festas WHERE id = {$this->id}";
        return $conexao->executa($sql);
    }

    public static function find($id): Festa
    {
        $conexao = new MySQL();
        $sql = "SELECT * FROM festas WHERE id = {$id}";
        $resultado = $conexao->consulta($sql);
        $f = new Festa($resultado[0]['nome'], $resultado[0]['endereco'], $resultado[0]['cidade'], $resultado[0]['dia']);
        $f->setId($resultado[0]['id']);
        return $f;
    }
    public static function findall(): array
    {
        $conexao = new MySQL();
        $sql = "SELECT * FROM festas";
        $resultados = $conexao->consulta($sql);
        $festas = array();
        foreach ($resultados as $resultado) {
            $f = new Festa($resultado['nome'], $resultado['endereco'], $resultado['cidade'], $resultado['dia']);
            $f->setId($resultado['id']);
            $festas[] = $f;
        }
        return $festas;
    }
}
