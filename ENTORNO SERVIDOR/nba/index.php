<!DOCTYPE html>
<?php include './Conexion/HerenciaConexion.php'; ?>

<html>
    <head>
        <title></title>
    </head>
    <body>

        <button>Resultado Equipo</button>
        <button>Lista jugadores</button>
        <?php
        $conexion = new ConexionHeredada();

        $conexion->hola();
        ?>
    </body>
</html>