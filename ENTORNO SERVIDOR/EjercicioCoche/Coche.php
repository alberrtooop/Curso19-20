<?php
include "Coches.php";

$Coches1 = new Coches("Diesel", 30, 120, 80, 20);



echo "INICIO </br>";
$Coches1 ->EstadoCoche();
echo $Coches1->isMovimiento(false);
$Coches1->isEstado(true);
$Coches1->EstaReserva();
echo $Coches1->Acelerar();
echo $Coches1->Acelerar();
$Coches1 ->EstadoCoche();
echo $Coches1->Frenar();
$Coches1 ->EstadoCoche();
echo $Coches1->Acelerar();
$Coches1->isEstado(false);
echo $Coches1->repostar (32);

$Coches1 ->EstadoCoche();
