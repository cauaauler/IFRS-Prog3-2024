<?php
require_once __DIR__ . "/vendor/autoload.php";

// Recupera os dados das cidades com a quantidade de festas
$festasAnteriores = Festa::pastPartys();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festas Realizadas</title>
</head>
<body>

<h2>Festas Realizadas</h2>

<table border="1">
    <thead>
        <tr>
            <th>Data</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Cidade</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($festasAnteriores as $festa) {
            echo "<tr>";
            echo "<td>{$festa['dia']}</td>";
            echo "<td>{$festa['nome']}</td>";
            echo "<td>{$festa['endereco']}</td>";
            echo "<td>{$festa['cidade']}</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<a href='index.php'>Página inicial</a>
<a href='cidadesFestas.php'>Festas por cidade</a>
<a href='festasRealizadas.php'>Festas Realizadas</a>
<a href='proximasFestas.php'>Próximas Festas</a>
<a href='festasMes.php'>Festas por Mês</a>

</body>
</html>
