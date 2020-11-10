<?php

/**
 * conexion Generica MVC
 */
class Conexion {

    private $HOSTNAME = "localhost";
    private $USERNAME = "root";
    private $PASSWORD = "";
    private $BD = "nba";
    //
    private $ConexionBD;

    function __construct() {
        $this->ConexionBD = mysqli_connect($this->HOSTNAME, $this->USERNAME, $this->PASSWORD, $this->BD);
    }

    function SentenciaMaximoAnotador() {
        $Sentencia= "";
    }
}
