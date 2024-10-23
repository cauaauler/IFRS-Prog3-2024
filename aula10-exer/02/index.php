
<?php

require_once("Assalariado.php");
require_once("Horista.php");
require_once("Comissionado.php");

$assalariado = new Assalariado("Marlon", "Brando", "123.456.789-00", 3000);
$horista = new Horista("Marlon", "Brando", "123.456.789-00", 10, 220);
$comissionado = new Comissionado("Marlon", "Brando", "123.456.789-00", 0.3, 3000);

echo $assalariado->vencimento();
echo "<br>";
echo $horista->vencimento();
echo "<br>";
echo $comissionado->vencimento();