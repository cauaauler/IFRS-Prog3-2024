<?php

class Jogador{

    public function __construct(private string $posicao, private string $nome){

    }

    public function getPosicao():string{
        return $this->posicao;
    }

}