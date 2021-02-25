<?php
include "db.php";

class Sentencias
{
    public static function RegistroUsuario($Tabla, $Datos)
    {
        $query = "INSERT INTO $Tabla (Usuario, Email, Pass, Nombre, Apellidos, Rol) 
        VALUES ( :Usuario, :Email, :Pass, :Nombre, :Apellidos, :Rol)";

        /*Preparando el Statements*/
        $stmt = Conexion::Conectar()->prepare($query);

        /*Prerando para enviarlo a la base de datos */
        $stmt->bindParam(':Usuario', $Datos['Usuario'], PDO::PARAM_STR);
        $stmt->bindParam(':Email', $Datos['Email'], PDO::PARAM_STR);
        $stmt->bindParam(':Pass', $Datos['Pass'], PDO::PARAM_STR);
        $stmt->bindParam(':Nombre', $Datos['Nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':Apellidos', $Datos['Apellidos'], PDO::PARAM_STR);
        $stmt->bindParam(':Rol', $Datos['Rol'], PDO::PARAM_STR);

        if ($stmt->execute()) {
            sleep(5);
            header("location:index.php");
        } else {
            print_r(Conexion::Conectar()->errorInfo());
        }
        $stmt = null;
    }



    public static function IngresoUsuario($Tabla, $Campo, $Usuario)
    {
        $query = "SELECT * FROM $Tabla WHERE $Campo = :$Campo";

        /*Preparando el Statements*/
        $stmt = Conexion::Conectar()->prepare($query);

        /*Prerando para enviarlo a la base de datos */
        $stmt->bindParam(":" . $Campo, $Usuario, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch();
    }


    public static  function MostrarUsuario($Tabla)
    {
        $query = "SELECT * FROM $Tabla";

        /*Preparando el Statements*/
        $stmt = Conexion::Conectar()->prepare($query);

        $stmt->execute();
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        } else {
            print_r(Conexion::Conectar()->errorInfo());
        }
        $stmt = null;
    }

    public static  function ActualizarUsu($Tabla, $Datos)
    {
        $query = "UPDATE $Tabla SET Usuario=:Usuario, Email=:Email,
        Pass=:Pass, Nombre=:Nombre, Apellidos=:Apellidos, Rol=:Rol WHERE ID_Usuario=:ID";

        /*Preparando el Statements*/
        $stmt = Conexion::Conectar()->prepare($query);

        /*Prerando para enviarlo a la base de datos */
        $stmt->bindParam(':ID', $Datos['ID_Usuario'], PDO::PARAM_INT);
        $stmt->bindParam(':Usuario', $Datos['Usuario'], PDO::PARAM_STR);
        $stmt->bindParam(':Email', $Datos['Email'], PDO::PARAM_STR);
        $stmt->bindParam(':Pass', $Datos['Pass'], PDO::PARAM_STR);
        $stmt->bindParam(':Nombre', $Datos['Nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':Apellidos', $Datos['Apellidos'], PDO::PARAM_STR);
        $stmt->bindParam(':Rol', $Datos['Rol'], PDO::PARAM_STR);

        if ($stmt->execute()) {
            sleep(5);
            header("location:MiPerfil.php");
        } else {
            print_r(Conexion::Conectar()->errorInfo());
        }
        $stmt = null;
    }



    public static function BorrarUsu($Tabla, $Datos)
    {
        $query = "DELETE FROM $Tabla WHERE ID_Usuario = :ID";

        /*Preparando el Statements*/
        $stmt = Conexion::Conectar()->prepare($query);

        /*Prerando para enviarlo a la base de datos */
        $stmt->bindParam(':ID', $Datos, PDO::PARAM_INT);

        if ($stmt->execute()) {
            header("location:MiPerfil.php");
        } else {
            print_r(Conexion::Conectar()->errorInfo());
        }
        $stmt = null;
    }


    public static function ComprobarUsu($Tabla, $Datos)
    {
        $query = "SELECT * FROM $Tabla WHERE Email=:Email";

        /*Preparando el Statements*/
        $stmt = Conexion::Conectar()->prepare($query);

        /*Prerando para enviarlo a la base de datos */
        $stmt->bindParam(":Email", $Datos, PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowcount() > 0) {
            return 1;
        } else {
            return 0;
        }
        $stmt = null;
    }


    public static function ComprobarRol($Tabla, $Datos)
    {
        $query = "SELECT Rol FROM $Tabla WHERE ID_Usuario = :ID";

        /*Preparando el Statements*/
        $stmt = Conexion::Conectar()->prepare($query);

        /*Prerando para enviarlo a la base de datos */
        $stmt->bindParam(':ID', $Datos, PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->execute()) {
            return $stmt->fetch();
        } else {
            sleep(5);
            header("location:MiPerfil.php");
        }
        $stmt = null;
    }
}
