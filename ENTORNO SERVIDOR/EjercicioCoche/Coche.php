<?php
include "Coches.php";

$Coches1 = new Coches("Diesel", 30, 120, 80, 10);

echo $Coches1->isMovimiento(false);
echo "</br>";
echo $Coches1->isEstado(true);
echo "</br>";
echo $Coches1->isReserva(60);
echo "</br>";
echo $Coches1->Acelerar();
$Coches1 ->EstadoCoche();
echo "</br>";
echo $Coches1->Frenar();
$Coches1 ->EstadoCoche();
echo "</br>";
//echo $Coches1->repostar(false, 20);
$Coches1 ->EstadoCoche();