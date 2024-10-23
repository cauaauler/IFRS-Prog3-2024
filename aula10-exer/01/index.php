<?php

include_once("Flauta.php");
include_once("Piano.php");
include_once("Violao.php");
include_once("Guitarra.php");

$flauta = new Flauta("Flauta");
echo $flauta->tocar();

echo"<br>";

$piano = new Piano("Piano");
echo $piano->tocar();

echo"<br>";

$violao = new Violao("Violao");
echo $violao->tocar();

echo"<br>";

$guitarra = new Guitarra("Guitarra");
echo $guitarra->tocar();