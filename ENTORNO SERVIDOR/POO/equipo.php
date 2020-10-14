<?php

class Equipo {

    private $NombreEquipo;
    public $Posicion;

    //Constructor
    function __construct($NombreEquipo, $Posicion) {
        $this->NombreEquipo = $NombreEquipo;
        $this->Posicion = $Posicion;
    }

    //Destructor
    function __destruct() {
        
    }

    //metodos get
    private function getNombreEquipo() {
        return $this->NombreEquipo;
    }

    public function setNombreEquipo($NombreEquipo) {
        $this->NombreEquipo = $NombreEquipo;
    }

    private function getPosicion() {
        return $this->Posicion;
    }

    public function setPosicion($Posicion) {
        $this->Posicion = $Posicion;
    }

    //funciones
    function mostrarEquipo() {
        echo "</br>";
        echo "Mi equipo es: " . $this->NombreEquipo;
    }

    function ponerEquipo($CambiarEquipo) {
        $this->NombreEquipo = $CambiarEquipo;
    }

}

?>