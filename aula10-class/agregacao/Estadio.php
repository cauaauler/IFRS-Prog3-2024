<?php

class Estadio{

    public function __construct(private int $capacidade, private string $nome){
    }

    public function getCapacidade():int{
        return $this->capacidade;
    }

    public function getNome():string{
        return $this->nome;
    }

}