<?php

require_once("Empregado.php");

class Horista extends Empregado{

    public function __construct(private string $nome, private string $sobrenome, private string $cpf, private float $precoHora, private float $horasTrabalhadas){
        parent::__construct($nome, $sobrenome, $cpf);
    }
    public function vencimento():string{
        return "R$ " . $this->precoHora * $this->horasTrabalhadas;
    }
}