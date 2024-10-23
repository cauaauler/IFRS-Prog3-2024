<?php

require_once("Aluno.php");
class AlunoGraduacao extends Aluno
{
    public function situacao(): bool
    {
        return $this->getFrequencia() >= 0.80 && $this->getMedia() >= 8;
    }
}
