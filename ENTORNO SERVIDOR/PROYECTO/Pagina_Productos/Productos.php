<?php


session_start();
$_SESSION['cart'] = 0;

session_destroy();

?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Producto.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <title>Registro</title>
</head>

<body>
    <?php include "../Templates/header.php"; ?>
    <div class="FormCentrado">
        <div class="section-log-in">
            <h2 class="logon-view__section-title">
                <span>CESTA DE LA COMPRA</span>
            </h2>
            <section>
                <?php include('../config/Sentencias.php');
                $id_cat = $_GET['ID'];

                $Productos = Sentencias::MostrarProductos("productos", $id_cat);

                /*print_r($Productos);*/
                foreach ($Productos as $key => $value) {
                ?>
                    <div class="card estilo-b">
                        <div class="img-container">
                            <img src="../IMG/Productos/<?php echo $value['imagen']; ?>" width="250" height="300">
                            <span class="price"><?php echo $value['precio']; ?>€</span>
                        </div>
                        <p class="PCarta"><?php echo $value['nombre']; ?></p>
                        <a href="#">Añadir a carrito</a>
                    </div>
                    <!--  Final de cada Producto -->
                <?php
                } ?>
            </section>
        </div>
</body>

</html>