<?php

/**
 * conexion Generica MVC
 */
class Conexion {

    private $HOSTNAME = "localhost";
    private $USERNAME = "root";
    private $PASSWORD = "root";
    private $BD = "nba";
    //Conexion Base de datos
    private $ConexionBD;

    //Constructor 
    function __construct() {
        $this->ConexionBD = mysqli_connect($this->HOSTNAME, $this->USERNAME, $this->PASSWORD, $this->BD);

        if (mysqli_connect_errno()) {
            echo "Se ha producido error en la conexion";
            exit();
        }
    }

    //Funcion Que nos devuelve el query
    function Sentencia($Sentencia) {
        $resultado = $this->ConexionBD->query($Sentencia);
        return $resultado;
    }

}
