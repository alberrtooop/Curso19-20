<?php

class Coches
{
    var $Movimiento = false;
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
        $Movimiento = $Movimiento;
        if ($Movimiento == true) {
            echo "El coche esta moviendose </br>";
        } else {
            echo "El coche se encuentra parado </br>";
        }
    }
    function isEstado($Movimiento)
    {
        $Movimiento = $Movimiento;
        if ($Movimiento == true) {
            return true;
        } else {
            return false;
        }
    }


    function EstaReserva()
    {

        if (($this->cantidadCombustible - 10) >= 10) {
            echo "litros para entrar en reserva son " . $this->LitrosSinReserva = ($this->cantidadCombustible - 10) . "</br>";
            return true;
        } else {
            return false;
        }
    }


    function Acelerar()
    {
        echo "Acelerando !!!! </br>";
        echo "</br>";
        $this->velociad += 5;
    }

    function Frenar()
    {
        echo "Frenando !!!! </br>";
        echo "</br>";
        $this->velociad -= 5;
    }




    function repostar($cantidadRepostar)
    {

        $estadoAhora = $this->isEstado($this->Movimiento);
        if ($estadoAhora == false && ($cantidadRepostar + $this->cantidadCombustible) >= $this->cantidadMaxCombustible) {

            $cantidadRepostar = $this->cantidadMaxCombustible - $this->cantidadCombustible;
            $this->LitrosSinReserva =  $this->cantidadMaxCombustible - 10;
            echo "Has repostado { $cantidadRepostar } Litros 1 </br>";
            echo "</br>";
        } else if ($estadoAhora == true) {
            echo "apagaaaa!! el coche para repostar </br>";
            echo "</br>";
        } else {
            $this->cantidadCombustible += $cantidadRepostar;
            $this->LitrosSinReserva = ($this->cantidadCombustible - 10);

            echo "Has repostado {$cantidadRepostar} Litros 2 </br>";
            echo "</br>";
        }
    }


    function EstadoCoche()
    {
        echo "El tipo de combustible: " . $this->tipoCombustibe . "</br>";
        echo "Cantidad de combustible: " . $this->cantidadCombustible . "</br>";
        echo "Velociddad actual: " . $this->velociad . "</br>";
        echo "Cantidad maxima de combustible: " . $this->cantidadMaxCombustible . "</br>";
        echo "Litro para Entrar en reserva: " . $this->LitrosSinReserva . "</br>";
    }
}
