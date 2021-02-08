<?php
include "db.php";

class Sentencias {


    public static function RegistroUsuario($Tabla, $Datos) {
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
        $stmt->bindParam(':Rol', $Datos['Rol'] , PDO::PARAM_STR);

        if($stmt->execute()){
            sleep(5);
            header("location:index.php");
        }else{
            print_r(Conexion::Conectar()->errorInfo());
        }
        $stmt = null;
    }


    
    public static function IngresoUsuario($Tabla, $Campo, $Usuario) {
        $query = "SELECT * FROM $Tabla WHERE $Campo = :$Campo";

        /*Preparando el Statements*/
        $stmt = Conexion::Conectar()->prepare($query);

        /*Prerando para enviarlo a la base de datos */
        $stmt->bindParam(":".$Campo, $Usuario, PDO::PARAM_STR);
        $stmt->execute();
         
        return $stmt->fetch();
    }
    

    static public function MostrarUsuario($Tabla) {
        $query = "SELECT * FROM $Tabla";

        /*Preparando el Statements*/
        $stmt = Conexion::Conectar()->prepare($query);
        
        $stmt->execute();
        if($stmt->execute()){ 
            return $stmt -> fetchAll();
       }else{
          print_r(Conexion::Conectar()->errorInfo());
       }
       $stmt = null;
    }


   

}
