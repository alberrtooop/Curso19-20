<?php 
session_start();
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
        <?php
        echo "<h1>Palabras Puestas: </h1>";
        if(isset($_SESSION["Palabras"])){
        foreach ($_SESSION["Palabras"] as $indice => $array) {
            echo $array ."<br>";
        }
            echo "<a href='Segunda_pagina.php'>Regresar</a>";
        }else{
            echo "No Se han Ingresado Palabras <br>";
        ?>
            <a href="Segunda_pagina.php">Insertar Palabra</a>
        <?php
        }
        ?>
        </div>
    </div>
  
</body>
</html>