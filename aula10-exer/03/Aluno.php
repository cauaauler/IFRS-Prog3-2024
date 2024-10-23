<?php

abstract class Aluno{

    public function __construct(private string $nome, private float $frequencia, private float $media){}
    abstract function situacao():bool;

    public function getNome():string{
        return $this->nome;
    }
    public function getFrequencia():float{
        return $this->frequencia;
    }
    public function getMedia():float{
        return $this->media;
    }
}