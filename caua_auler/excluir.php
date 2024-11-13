<?php
require_once __DIR__."/vendor/autoload.php";
$produto = Produto::find($_GET['id_produto']);
$produto->delete();
header("location:index.php");