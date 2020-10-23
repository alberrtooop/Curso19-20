<?php

class Coches
{
    var $MovimientoActual;
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
        if ($LitrosSinReserva >= 10)
            $this->LitrosSinReserva = $LitrosSinReserva;
        else
            echo "No se puede";
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


    //Funciones

    function isEstado($Movimiento)
    {
        $this->MovimientoActual = $Movimiento;
        if ($Movimiento == true) {
            $this->velociad = $this->velociad;
            echo "El coche esta moviendose </br>";
        } else {
            $this->velociad = 0;
            echo "El coche se encuentra parado </br>";
        }
    }
    function  isMovimiento($Movimiento)
    {
        $this->MovimientoActual = $Movimiento;
        if ($this->MovimientoActual == true) {
            $this->velociad = $this->velociad;
            return true;
        } else {
            $this->velociad = 0;
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
        $this->cantidadCombustible -= 0.5;
    }

    function Frenar()
    {
        echo "Frenando !!!! </br>";
        echo "</br>";
        if ($this->velociad >= 5)
            $this->velociad -= 5;
        else
            $this->velociad = 0;
    }


    function repostar($cantidadRepostar)
    {
        $estadoAhora = $this->isMovimiento($this->MovimientoActual);
        if ($cantidadRepostar > 0) {
            if ($estadoAhora == false && ($cantidadRepostar + $this->cantidadCombustible) >= $this->cantidadMaxCombustible) {

                $cantidadRepostar = $this->cantidadMaxCombustible - $this->cantidadCombustible;
                $this->LitrosSinReserva =  $this->cantidadMaxCombustible - 10;
                $this->velociad = 0;
                echo "Has repostado { $cantidadRepostar } Litros 1 </br>";
                echo "</br>";
            } else if ($estadoAhora == true) {
                echo "apagaaaa!! el coche para repostar </br>";
                echo "</br>";
            } else {
                $this->cantidadCombustible += $cantidadRepostar;
                $this->LitrosSinReserva = ($this->cantidadCombustible - 10);
                $this->velociad = 0;
                echo "Has repostado {$cantidadRepostar} Litros 2 </br>";
                echo "</br>";
            }
        } else
            echo "No se pueden quitar litros </br>";
        echo "</br>";
    }


    function EstadoCoche()
    {
        echo "El tipo de combustible: " . $this->tipoCombustibe . "</br>";
        echo "Cantidad de combustible: " . $this->cantidadCombustible . "</br>";
        echo "Velocidad actual: " . $this->velociad . "</br>";
        echo "Cantidad maxima de combustible: " . $this->cantidadMaxCombustible . "</br>";
        echo "Litro para Entrar en reserva: " . $this->LitrosSinReserva . "</br>";
        echo "</br>";
    }
}
