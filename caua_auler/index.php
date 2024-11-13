<?php
require_once __DIR__ . "/vendor/autoload.php";
$produtos = Produto::findall();
if (isset($_POST["ordenar"]) && $_POST["ordenar"] != 'todos_produtos') {
    $produtos = Produto::findallbycategory($_POST["ordenar"]);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Produtos</title>
</head>

<body>

    <table>
        <tr>
            <td>Descrição</td>
            <td>Categoria</td>
            <td>Valor</td>
            <td>Opções</td>
        </tr>
        <?php
        $valor_total = 0;
        foreach ($produtos as $produto) {
            $valor_total += $produto->getValor();

            echo "<tr>";
            echo "<td>{$produto->getDescricao()}</td>";
            echo "<td>{$produto->getCategoria()}</td>";
            echo "<td>{$produto->getValor()}</td>";
            echo "<td>
                <a href='formEdit.php?id_produto={$produto->getIdProduto()}'>Editar</a>
                <a href='excluir.php?id_produto={$produto->getIdProduto()}'>Excluir</a> 
             </td>";
            echo "</tr>";
        }

        echo "<h2>Valor Total: {$valor_total}</h2>";


        echo "
    <form action='index.php' method='POST'>

    Visualizar: <select name='ordenar' id='ordenar'>
    <option value='todos_produtos'>Todos produtos</option>
    <option value='coletivo'>Somente coletivos</option>
    <option value='individual'>Somente individuais</option>
    </select>
    
    <input type='submit' name='enviar'>
    </form>";

        ?>
    </table>
    <a href='formCad.php'>Adicionar Produto</a>
</body>

</html>