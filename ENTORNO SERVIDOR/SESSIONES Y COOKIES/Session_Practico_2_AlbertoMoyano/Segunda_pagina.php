<?php 
session_start();

if(isset($_SESSION["Contador"])){
    $_SESSION["Contador"] = $_SESSION["Contador"]+1;
}else{
    $_SESSION["Contador"] = 1; 
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Unidad 6 - Tarea 2</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='Estilos.css'>
</head>

<body>
    <div id="BloqueCentrado">
        <div id="bloque2"> 
            <a href="CerrarSession.php">Cerrar Usuario</a> 
        </div>
        <div>
            <?php if(isset($_SESSION['NombreUsario'])){echo "<h2> Bienvenido, " . $_SESSION["NombreUsario"]."</h2>";} ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <label for="Nombre">AñadirPalabras: </label>
                <input type="text" id="Nombre" name="Nombre">
                <input type="submit" id="btnEnviar" value="Enviar" name="btnEnviar"> 
            </form>  
            <a href="Listado_pagina.php">Ver Palabras</a><br>             
        </div>
    </div>
<?php 

if(isset($_REQUEST["btnEnviar"])){
    $Nombre = $_REQUEST["Nombre"];
    $i = $_SESSION["Contador"];
    $_SESSION["Palabras"]["Nombre". $i] = $Nombre;
    header("location:Listado_pagina.php");
}
?>
</body>

</html>
