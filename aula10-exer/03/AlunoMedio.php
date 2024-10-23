<?php

require_once("Aluno.php");

class AlunoMedio extends Aluno
{
    public function situacao(): bool
    {
        return $this->getFrequencia() >= 0.75 && $this->getMedia() >= 7;
    }
}
