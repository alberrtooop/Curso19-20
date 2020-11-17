<link href="../Estilos/estilos.css" rel="stylesheet" type="text/css"/>
<?php include '../Conexion/Equipo.php'; ?>

<?php
$conexion = new ConexionHeredada();

if ($conexion->MostrarEquipo() == null) {
    echo "<img class='imgFo' src='../Imagen/404.png' alt=''/>";
} else {
    echo "<div>";
    echo "<h1>Listado de Equipos</h1>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>Ciudad</th>";
    echo "<th>Conferencia</th>";
    echo "<th>Division</th>";
    echo "<th>Accion</th>";
    echo "</tr>";

    foreach ($conexion->MostrarEquipo() as $fila) {
        echo "<tr>";
        echo "<td>" . $fila['Nombre'] . "</td> ";
        echo "<td>" . $fila['Ciudad'] . "</td> ";
        echo "<td>" . $fila['Conferencia'] . "</td> ";
        echo "<td>" . $fila['Division'] . "</td> ";
        echo "<td>
            <form method='post' action='borrarDB.php'>
                <input type='hidden' name='id_Nombre' value='" . $fila["Nombre"] . "'>
                <input type='submit' value='Eliminar'>
            </form>
            </td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
}





    