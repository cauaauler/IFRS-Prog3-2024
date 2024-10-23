<?php

require_once "Time.php";

$time = new Time("Super Grêmio");
$time->adicionaJogador("Goleiro", "Ronaldo");
$time->adicionaJogador("Ponta Esquerdo", "Messi");
$time->adicionaJogador("Zagueiro", "Maradona");

$time->getJogadores();