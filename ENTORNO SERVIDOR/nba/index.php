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
        echo "<table>";
        foreach ($conexion->MaximoAnatador() as $equipo) {
            echo "<tr>";
            foreach ($equipo as $contenido) {
                echo "<td>" . $contenido . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>