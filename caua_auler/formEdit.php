<?php
if(isset($_GET['id_produto'])){
    require_once __DIR__."/vendor/autoload.php";
    $produto = Produto::find($_GET['id_produto']);
}
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
      
    if((is_numeric($_POST['valor'])) && isset($_POST['valor'])){
        $produto = new Produto($_POST['descricao'],$_POST['categoria'],$_POST['valor']);
        $produto->setIdProduto($_POST['id_produto']);
        $produto->save();
        header("location: index.php");
    }
    else{
        header("location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    <form action='formEdit.php' method='POST'>
        <?php
            echo "Descrição: <input name='descricao' value='{$produto->getDescricao()}' type='text' required>";
            echo "<br>";
            if($produto->getCategoria() == 'Individual'){
                echo "Categoria: <select name='categoria' id=''>
                <option value='Individual'>Individual</option>
                <option value='Coletivo'>Coletivo</option>
                </select>";
            }else{
                echo "Categoria: <select name='categoria' id=''>
                <option value='Coletivo'>Coletivo</option>
                <option value='Individual'>Individual</option>
                </select>";
            }
            
            echo "<br>";
            echo "Valor: <input name='valor' value={$produto->getValor()} type='text' required>";
            echo "<br>";
            echo "<input name='id_produto' value={$produto->getIdProduto()} type='hidden'>";
        ?>
        <br>
        <input type='submit' name='botao'>
    </form>
</body>
</html>

