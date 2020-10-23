<?php

include "Jugador.php";

class Equipo {

    //PROPIEDADES
    private $jugadores = array();

    //CONSTRUCTOR
    function __construct() {
        
    }

    //GETTER
    function getJugadores() {
        return $this->jugadores;
    }

    //METODOS
    function getTotal() {
        $total = 0;
        foreach ($this->jugadores as $dato) {
            $total += $dato->getPtos();
        }
        return $total;
    }

    function addJug($jugador) {
        $this->jugadores[] = $jugador;
    }

    function MostarJugadores() {
        echo "<pre>";
        var_dump($this->jugadores);
        echo "</pre>";
    }

}
