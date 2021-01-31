<?php session_start(); ?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset='utf-8'>
        <title>Carrito</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='Estilos.css'>
    </head>

    <body>
        <div id="BloqueCentrado">
            <div id="bloque2"> 
                <a href="CerrarSession.php">Cerrar Usuario</a> 
            </div>
            <div>
                <h1><?php if (isset($_COOKIE['Usuario'])) {echo "<h2> Carrito, " . $_COOKIE['Usuario'] . "</h2>";}?> </h1>
                <?php
                if (isset($_COOKIE["Carrito"])) {
                    echo " <table>
                    <tr>
                        <th width='40%'>Item</th>
                        <th width='40%'>Nombre</th>
                        <th width='40%'>Cantidad</th>
                        <th width='40%'>Price</th>
                        <th width='40%'>Total</th>
                    </tr>";
                    
                    $total = 0;
                    //le quitamos a nuestro array / 
                    $DatosCookie = stripslashes($_COOKIE['Carrito']);
                    // Lo empaquetamos y al ser Bidimensional pues tenemos que poner true
                    $Carrito = json_decode($DatosCookie, true);
                    //Numero de productos
                    $item = 1;
                    foreach ($Carrito as $keys => $values) {
                        ?>
                        <tr>
                            <td><?php echo ($item++) ?></td>
                            <td><?php echo $values["Nombre"]; ?></td>
                            <td> <?php echo $values["precio"]; ?></td>    
                            <td> <?php echo $values["Cantidad"]; ?></td>   
                            <td> <?php echo number_format($values["Cantidad"] * $values["precio"], 2); ?></td>
                        </tr>
                        <?php
                        $total = $total + ($values["Cantidad"] * $values["precio"]);
                    }
                    ?>
                    <tr>
                        <td>Total</td>
                        <td> <?php echo number_format($total, 2); ?>€ </td>
                        <td></td>
                    </tr>
                    <?php
                } else {
                    echo '<tr>
                            <td>No tiene nada en el carrito</td>
                        </tr>';
                }
                ?>
                </table>

                <a href='Productos.php'>Añadir Productos</a>

            </div>
        </div>
    </body>
</html>