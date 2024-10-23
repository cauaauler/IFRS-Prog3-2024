<?php

require_once("Empregado.php");

class Assalariado extends Empregado{

    public function __construct(private string $nome, private string $sobrenome, private string $cpf, private float $salario){
        parent::__construct($nome, $sobrenome, $cpf);
    }
    public function vencimento():string{
        return "R$ " . $this->salario;
    }
}