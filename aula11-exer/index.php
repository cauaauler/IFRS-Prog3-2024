<?php
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $u = new Festa($_POST['nome'],$_POST['endereco'],$_POST['cidade'],$_POST['dia']);
    $u->save();
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festa</title>
</head>
<body>
<form action="index.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco" required>

    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="cidade" required>

    <label for="dia">Dia:</label>
    <input type="date" id="dia" name="dia" required>

    <input type="submit" value="Enviar">
</form>
</body>
</html>


