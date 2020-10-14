<?php

require 'equipo.php';

$UNCBasket = new Equipo("Unicaja", "alero");
//$RMDBasket = new Equipo();

$UNCBasket->MostrarEquipo();
echo "</br>";
echo "Cambair equipo";
$UNCBasket->ponerEquipo("Real Madrid ");
$UNCBasket->MostrarEquipo();
