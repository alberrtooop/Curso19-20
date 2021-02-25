<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once "./config/Sentencias.php";

class controladorFormularios
{
    /*     * **************************************************** */
    /*                    REGISTROS                               */
    /*     * **************************************************** */

    static public function Registro()
    {
        $Tabla = "usuario";
        if (isset($_POST["btnCrear"])) {
            if (Sentencias::ComprobarUsu($Tabla, $_POST["ReEmail"]) == 0) {
                if ($_POST["RePass"] == $_POST["RePass2"]) {
                    if (filter_var($_POST["ReEmail"], FILTER_VALIDATE_EMAIL)) {

                        $Datos = array(
                            "Usuario" => $_POST["ReEmail"],
                            "Email" => $_POST["ReEmail"],
                            "Pass" => $_POST["RePass"],
                            "Nombre" => $_POST["ReNom"],
                            "Apellidos" => $_POST["ReApe"],
                            "Rol" => $_POST["Rol"]
                        );
                        Sentencias::RegistroUsuario($Tabla, $Datos);
                    } else {
                        header("location:registro.php");
                    }
                } else {
                    header("location:registro.php");
                }
            } else {
                header("location:registro.php");
            }
        }
    }


    /*     * **************************************************** */
    /*                     INGRESO                                */
    /*     * **************************************************** */

    public function Ingreso()
    {
        $Tabla = "usuario";
        $Campo = "Email";
        $Usuario = $_POST["ValUsu"];

        $respuesta = Sentencias::IngresoUsuario($Tabla, $Campo, $Usuario);
        if (!empty($_POST["ValUsu"]) && !empty($_POST["Valpass"])) {
            if ($respuesta["Email"] == $_POST["ValUsu"] && $respuesta["Pass"] == $_POST["Valpass"]) {
                $_SESSION["Validacion"] = "ok";
                sleep(2);
                header("location:MiPerfil.php");
            } else {
                header("location:index.php");
            }
        } else {
            header("location:index.php");
        }
    }

    /*     * **************************************************** */
    /*                     MOSTRAR                                */
    /*     * **************************************************** */

    public function Mostrar()
    {
        $Tabla = "usuario";
        return Sentencias::MostrarUsuario($Tabla);
    }


    /*     * **************************************************** */
    /*                     ACTUALIZAR                              */
    /*     * **************************************************** */

    public function Actualizar()
    {
        $Tabla = "usuario";
        if (isset($_POST["btnActualizar"])) {
            if (Sentencias::ComprobarUsu($Tabla, $_POST["ReEmail"]) == 0) {
                if ($_POST["RePass"] == $_POST["RePass2"]) {
                    if (filter_var($_POST["ReEmail"], FILTER_VALIDATE_EMAIL)) {
                        $Tabla = "usuario";
                        $Datos = array(
                            "ID_Usuario" => $_POST["ID"],
                            "Usuario" => $_POST["ReEmail"],
                            "Email" => $_POST["ReEmail"],
                            "Pass" => $_POST["RePass"],
                            "Nombre" => $_POST["ReNom"],
                            "Apellidos" => $_POST["ReApe"],
                            "Rol" => $_POST["Rol"]
                        );
                        Sentencias::ActualizarUsu($Tabla, $Datos);
                    } else {
                        //header("location:actualizar.php");
                    }
                } else {
                    header("location:MiPerfil.php");
                }
            } else {
                header("location:MiPerfil.php");
            }
        }
    }

    public function Borrar($Datos)
    {
        $Tabla = "usuario";

        $Respuestas = Sentencias::ComprobarRol($Tabla, $Datos);


        if ($Respuestas['Rol'] == "Usuario") {
            Sentencias::BorrarUsu($Tabla, $Datos);
        } else {
            header("location:MiPerfil.php");
        }
    }
}

$pregunta = new controladorFormularios();

if (isset($_POST["btnCrear"])) {
    $pregunta->Registro();
}
if (isset($_REQUEST["btnEntrar"])) {
    $pregunta->Ingreso();
}
if (isset($_REQUEST["btnActualizar"])) {
    $pregunta->Actualizar();
}
