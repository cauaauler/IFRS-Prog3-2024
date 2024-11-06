<?php
require_once __DIR__ . "/vendor/autoload.php";

// Recupera os dados das cidades com a quantidade de festas
$festasPorCidade = Festa::quantityPerCity();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidades com mais festas</title>
</head>
<body>

<h2>Cidades com mais festas</h2>

<table border="1">
    <thead>
        <tr>
            <th>Cidade</th>
            <th>Total de Festas</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($festasPorCidade as $festaCidade) {
            echo "<tr>";
            echo "<td>{$festaCidade['cidade']}</td>";
            echo "<td>{$festaCidade['total_festas']}</td>";
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
