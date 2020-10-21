<?php

class clasesJugador {
    
    //PROPIEDADES
    private $numeroJug;
    private $ptos;

    //CONSTRUCTOR
    function __construct($numeroJug, $ptos) {
        $this->numeroJug = $numeroJug;
        $this->ptos = $ptos;
    }

    //GETTER
    function getNumeroJug() {
        return $this->numeroJug;
    }

    function getPtos() {
        return $this->ptos;
    }
    
    //METODOS
    function addPtos($ptos) {
        
    }

}

?>
