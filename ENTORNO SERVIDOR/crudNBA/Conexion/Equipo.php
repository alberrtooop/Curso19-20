<?php

include 'db.php';

class ConexionHeredada extends Conexion {

    private $Aray;

    function __construct() {
        parent::__construct();
        $this->Aray = array();
    }

    public function insertarEquipo($Nombre, $Ciudad, $Conferencia, $Division) {
        $query = "INSERT INTO equipos (Nombre, Ciudad, Conferencia, Division) VALUES ('" . $Nombre . "','" . $Ciudad . "','" . $Conferencia . "','" . $Division . "')";
        if (!$this->Sentencia($query) || is_null($this->Sentencia($query))) {
            return false;
        } else {
            $this->Sentencia($query);
            return true;
        }
    }

    public function actualizarEquipo($Nombre, $Ciudad, $Conferencia, $Division) {
        $query = "UPDATE equipos SET Ciudad = '" . $Ciudad . "', Conferencia = '" . $Conferencia . "', Division = '" . $Division . "' WHERE Nombre = '" . $Nombre . "'";
        if (!$this->Sentencia($query) || is_null($this->Sentencia($query))) {
            return false;
        } else {
            $this->Sentencia($query);
            return true;
        }
    }

    public function BorrarEquipo($Nombre) {
    $query = "DELETE FROM equipos WHERE Nombre='".$Nombre."'";
        if (!$this->Sentencia($query) || is_null($this->Sentencia($query))) {
            return false;
        } else {
            $this->Sentencia($query);
            return true;
        }
    }

    public function MostrarEquipo() {
        $query = "SELECT Nombre, Ciudad, Conferencia, Division FROM equipos";
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
