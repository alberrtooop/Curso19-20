<?php

/**
 * conexion Generica MVC
 */
class Conexion
{
    public static function Conectar()
    {
        $link = new PDO("mysql:host=localhost;dbname=tienda", "root", "");

        $link->exec("set names utf8");

        return $link;
    }
}
