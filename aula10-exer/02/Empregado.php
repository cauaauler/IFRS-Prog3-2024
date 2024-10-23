<?php
abstract class Empregado{

    public function __construct(private string $nome, private string $sobrenome, private string $cpf){}
    abstract public function vencimento():string;
    
}