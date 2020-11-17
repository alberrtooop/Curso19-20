<link href="../Estilos/estilos.css" rel="stylesheet" type="text/css"/>
<?php include '../Conexion/Equipo.php'; ?>

<?php
$conexion = new ConexionHeredada();

if (isset($_POST['Nombre']) && !empty($_POST['Nombre']) &&
        isset($_POST['Ciudad']) && !empty($_POST['Ciudad']) &&
        isset($_POST['Conferencia']) && !empty($_POST['Conferencia']) &&
        isset($_POST['Division']) && !empty($_POST['Division'])) {

    $Nombre = $_POST["Nombre"];
    $Ciudad = $_POST["Ciudad"];
    $Conferencia = $_POST["Conferencia"];
    $Division = $_POST["Division"];

    //Insertar Un Equipo a la base de datos 
    if ($conexion->actualizarEquipo($Nombre, $Ciudad, $Conferencia, $Division) == null) {
        echo "<img class='imgFo' src='../Imagen/404.png' alt=''/>";
    } else {
        $conexion->actualizarEquipo($Nombre, $Ciudad, $Conferencia, $Division);
        echo "<h1>&Uacute;ltimo Registro modificado</h1><br/>";
        echo "<p>Nombre: " . $Nombre . "</p>";
        echo "<p>Ciudad: " . $Ciudad . "</p>";
        echo "<p>Conferencia: " . $Conferencia . "</p>";
        echo "<p>Division: " . $Division . "</p> <br/>";
        echo "<a class='ClaseA' href='actualizar.php'>Actualizar Registro</a><br/>";
        echo "<a class='ClaseA' href='listaequipos.php'>Borrar Registro</a>";
    }
}else{
    echo "<img class='imgFo' src='../Imagen/404.png' alt=''/>";
}
    

//SELECT DISTINCT(Posicion) FROM jugadores