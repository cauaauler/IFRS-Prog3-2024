<?php

require_once("Empregado.php");

class Comissionado extends Empregado{

    public function __construct(private string $nome, private string $sobrenome, private string $cpf, private float $totalVenda, private float $taxaComissao){
        parent::__construct($nome, $sobrenome, $cpf);
    }
    public function vencimento():string{
        return "R$ " . $this->taxaComissao * $this->totalVenda;
    }
}