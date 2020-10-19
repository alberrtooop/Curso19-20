<?php

class Coches
{
    //Variables
    private $tipoCombustibe;
    private $cantidadCombustible;
    private $velociad;
    private $cantidadMaxCombustible;
    private $LitrosSinReserva;

    //Contructor
    function __construct($tipoCombustibe, $cantidadCombustible, $velociad, $cantidadMaxCombustible, $LitrosSinReserva)
    {
        $this->tipoCombustibe = $tipoCombustibe;
        $this->cantidadCombustible = $cantidadCombustible;
        $this->velociad = $velociad;
        $this->cantidadMaxCombustible = $cantidadMaxCombustible;
        $this->LitrosSinReserva = $LitrosSinReserva;
    }
    //GETTER
    public function get_tipoCombustible()
    {
        return $this->tipoCombustibe;
    }

    public function get_cantidadCombustible()
    {
        return $this->cantidadCombustible;
    }

    public function get_velociad()
    {
        return $this->velociad;
    }

    public function get_cantidadMaxCombustible()
    {
        return $this->cantidadMaxCombustible;
    }

    public function get_LitrosSinReserva()
    {
        return $this->LitrosSinReserva;
    }


    //SETTER
    public function set_tipoCombustible($tipoCombustible)
    {
        $this->tipoCombustible = $tipoCombustible;
    }

    public function set_cantidadCombustible($cantidadCombustible)
    {
        $this->cantidadCombustible = $cantidadCombustible;
    }

    public function set_velociad($velociad)
    {
        $this->velociad = $velociad;
    }

    public function set_cantidadMaxCombustible($cantidadMaxCombustible)
    {
        $this->cantidadMaxCombustible = $cantidadMaxCombustible;
    }

    public function set_LitrosSinReserva($LitrosSinReserva)
    {
        $this->LitrosSinReserva = $LitrosSinReserva;
    }


    //Funciones

    function isMovimiento($Movimiento)
    {
        if ($Movimiento == true) {
            echo "El coche esta moviendose";
        } else {
            echo "El coche se encuentra parado";
        }
    }
    function isEstado($Movimiento)
    {
        if ($Movimiento == true) {
            return true;
        } else {
            return false;
        }
    }


    function isReserva($cantidadCombustible)
    {
        $Reserva = $this->cantidadMaxCombustible - $this->LitrosSinReserva;

        if ($cantidadCombustible > $Reserva) {
            return true;
        } else {
            return false;
        }
    }


    function Acelerar()
    {
        $this->velociad + 5;
    }

    function Frenar()
    {
        $this->velociad - 5;
    }
    /*
    function repostar($EstadoCoche, $cantidadRepostar)
    {
        $estado = $this->isEstado($EstadoCoche);
        if ($estado == true && $this->cantidadMaxCombustible > $cantidadRepostar);
    }*/


    function EstadoCoche()
    {
        echo "El tipo de combustible: " . $this->tipoCombustibe . "</br>";
        echo "Cantidad de combustible: " . $this->cantidadCombustible . "</br>";
        echo "Velociddad actual: " . $this->velociad . "</br>";
        echo "Cantidad maxima de combustible: " . $this->cantidadMaxCombustible . "</br>";
        echo "Litro para Entrar en reserva: " . $this->LitrosSinReserva . "</br>";
    }
}
