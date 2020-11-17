<link href="../Estilos/estilos.css" rel="stylesheet" type="text/css"/>
<?php include '../Conexion/Equipo.php'; ?>

<?php
$conexion = new ConexionHeredada();

if (isset($_POST['id_Nombre']) && !empty($_POST['id_Nombre'])) {

    $Nombre = $_POST["id_Nombre"];

    if ($conexion->BorrarEquipo($Nombre) == null) {
        echo "<img class='imgFo' src='../Imagen/404.png' alt=''/>";
    } else {
        $conexion->BorrarEquipo($Nombre);
        header("location: ../index.php");
    }
} else {
    echo "<img class='imgFo' src='../Imagen/404.png' alt=''/>";
}





    