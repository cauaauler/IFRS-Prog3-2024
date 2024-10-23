
<?php

require_once("AlunoMedio.php");
require_once("AlunoGraduacao.php");

$aluno1 = new AlunoMedio("Marlon", 0.7, 3);
$aluno2 = new AlunoGraduacao("Leticia", 0.8, 8);

echo $aluno1->getNome() . " - Situação: " . ($aluno1->situacao() ? "Aprovado" : "Reprovado")  . "<br>";
echo $aluno2->getNome() . " - Situação: " . ($aluno2->situacao() ? "Aprovado" : "Reprovado") . "<br>";
