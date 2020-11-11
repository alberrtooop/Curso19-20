<?php

include 'Conexion.php';

class ConexionHeredada extends Conexion {

    private $Aray;

    function __construct() {
        parent::__construct();
        $this->Aray = array();
    }

    public function MaximoAnatador() {
        $query = "SELECT Nombre, Nombre_equipo, Puntos_por_partido FROM jugadores INNER JOIN estadisticas ON (jugadores.codigo = estadisticas.jugador) ORDER BY estadisticas.Puntos_por_partido DESC LIMIT 5";
        $Sentencia = $this->Sentencia($query);
        if ($Sentencia != null) {
            $ArrayAsoc = $this->Aray;
            while ($NumeroFila = $Sentencia->fetch_assoc()) {
                $ArrayAsoc[] = $NumeroFila;
            }
        } else {
            return null;
        }
        return $ArrayAsoc;
    }

}
