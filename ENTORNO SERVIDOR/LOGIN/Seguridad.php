<?php

include './config/Sentencias.php';

class controladorFormularios {
    /*     * ************ *************************************** */
    /*                    REGISTROS                               */
    /*     * **************************************************** */

    static public function Registro() {

        if (isset($_POST['btnCrear'])) {
            if (filter_var($_POST["ReEmail"], FILTER_VALIDATE_EMAIL)) {
                $Tabla = "usuario";
                $Datos = array(
                    "Usuario" => $_POST["ReEmail"],
                    "Email" => $_POST["ReEmail"],
                    "Pass" => $_POST["RePass"],
                    "Nombre" => $_POST["ReNom"],
                    "Apellidos" => $_POST["ReApe"],
                    "Rol" => 'Usuario'
                );

                Sentencias::RegistroUsuario($Tabla, $Datos);
            } else {
                header("location:registro.php");
            }
        }
    }

    /*     * **************************************************** */
    /*                     INGRESO                                */
    /*     * **************************************************** */

    public function Ingreso() {

        if (isset($_POST['btnEntrar'])) {
            $Tabla = "usuario";
            $Campo = "Email";
            $Usuario = $_POST["ValUsu"];
            $respuesta = Sentencias::IngresoUsuario($Tabla, $Campo, $Usuario);

            echo print_r($_POST["ValUsu"]);
            /*
            echo "<br>";
            echo print_r($_POST["Valpass"]);
            echo "<br>";
            echo print_r($respuesta['Email']);
            echo "<br>";
            echo print_r($respuesta['Pass']);
            echo "<br>";
            echo "</pre>". print_r($respuesta)."</pre>";
        */


            if($respuesta['Email'] === $_POST["ValUsu"] && $respuesta['Pass'] && $_POST["Valpass"]){
                $_SESSION['Validacion'] = 'ok';
            }
        }
    }

    /*     * **************************************************** */
    /*                     MOSTRAR                                */
    /*     * **************************************************** */

    public function Mostrar() {
        $Tabla = "usuario";
        return Sentencias::MostrarUsuario($Tabla);
    }

}

$pregunta = new controladorFormularios();

if (isset($_POST['btnCrear'])) {
    $pregunta->Registro();
}
if (isset($_REQUEST["btnEntrar"])) {
    $pregunta->Ingreso();
}