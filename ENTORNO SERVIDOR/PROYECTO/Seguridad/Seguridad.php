<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once "../config/Sentencias.php";

class controladorFormularios
{
    /*     * **************************************************** */
    /*                    REGISTROS                               */
    /*     * **************************************************** */

    static public function Registro()
    {
        $Tabla = "usuario";
        if (isset($_POST["btnCrear"])) {
            if (Sentencias::ComprobarUsu($Tabla, $_POST["Re_Email"]) == 0) {
                if ($_POST["Re_Pass"] == $_POST["Re_Pass2"]) {
                    if (filter_var($_POST["Re_Email"], FILTER_VALIDATE_EMAIL)) {

                        
                        $Datos = array(
                            "Email" => $_POST["Re_Email"],
                            "Contrasena" => $_POST["Re_Pass"],
                            "Nombre" => $_POST["Re_Nombre"],
                            "Apellidos" => $_POST["Re_Apellido"],
                            "Direccion" => $_POST["Direccion"],
                            "Piso_Puerta" => $_POST["Piso_Puerta"],
                            "CP" => $_POST["CP"],
                            "Telefono" => $_POST["Telefono"]
                        );

                        print_r($Datos);
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

    /*     * **************************************************** */
    /*                        BORRAR                              */
    /*     * **************************************************** */

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
