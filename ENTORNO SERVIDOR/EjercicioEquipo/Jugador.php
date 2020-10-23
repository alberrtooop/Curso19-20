<?php

class Jugadore {

    //PROPIEDADES
    private $numeroJug;
    private $ptos;

    //CONSTRUCTOR
    function __construct($numeroJug) {
        $this->numeroJug = $numeroJug;
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
        if ($ptos > 0) {
            $this->ptos += $ptos;
        }
    }

}

?>
