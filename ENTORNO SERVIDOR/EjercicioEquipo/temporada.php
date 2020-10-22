<?php

require_once "Equipo.php";

//$Equipo = new Equipo("Malaga FC");
//Instancias
$jugador = new Jugadore(1);
$jugador2 = new Jugadore(2);
$jugador3 = new Jugadore(3);
$jugador4 = new Jugadore(4);
$jugador5 = new Jugadore(5);
$jugador6 = new Jugadore(6);
$jugador7 = new Jugadore(7);
$jugador8 = new Jugadore(8);
$jugador9 = new Jugadore(9);
//Puntuacion Aleatoria
for ($i = 0; $i < 9; $i++) {
    $PuntuacionAlea = rand(20, 100);
}


//Añadir Puntuaciones
$jugador->addPtos($PuntuacionAlea);
$jugador2->addPtos($PuntuacionAlea);
$jugador3->addPtos($PuntuacionAlea);
$jugador4->addPtos($PuntuacionAlea);
$jugador5->addPtos($PuntuacionAlea);
$jugador6->addPtos($PuntuacionAlea);
$jugador7->addPtos($PuntuacionAlea);
$jugador8->addPtos($PuntuacionAlea);
$jugador9->addPtos($PuntuacionAlea);

//Añadir Jugador Al equipo
$Equipo = new Equipo();
$Equipo->addJug($jugador);
$Equipo->addJug($jugador2);
$Equipo->addJug($jugador3);
$Equipo->addJug($jugador4);
$Equipo->addJug($jugador5);
$Equipo->addJug($jugador6);
$Equipo->addJug($jugador7);
$Equipo->addJug($jugador8);
$Equipo->addJug($jugador9);


echo "Total de puntos en el Equipo ".$Equipo->getTotal();

$Equipo->MostarJugadores();











