<?php
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    
    if((is_numeric($_POST['valor'])) && isset($_POST['valor'])){
        $produto = new Produto($_POST['descricao'],$_POST['categoria'],$_POST['valor']);
        $produto->save();
        header("location: index.php");
    }
    else{
        echo"<h1>Valor inválido</h1>";
    }
   
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
</head>
<body>
    <form action='formCad.php' method='POST'>
        Descrição: <input name='descricao' type='text' required>
        <br>
        Categoria: 
            <select name="categoria" id="">
                <option value="Individual">Individual</option>
                <option value="Coletivo">Coletivo</option>
            </select>
        <br>
        
        Valor: <input name='valor' type='text' required>
        <br>
        <input type='submit' name='botao'>
    </form>
</body>
</html>

