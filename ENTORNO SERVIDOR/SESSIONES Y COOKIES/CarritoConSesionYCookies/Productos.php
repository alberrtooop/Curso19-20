<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Productos</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='Estilos.css'>
    </head>

    <body>
        <div id="BloqueCentrado">
            <div>
                <?php
                if (isset($_SESSION['Usuario'])) {
                    echo "<h2> Bienvenido, " . $_SESSION["Usuario"] . "</h2>";
                }
                ?>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <label for="Nombre">FiFa 21 </label>
                    <input type="hidden" name="Nombre" value="FiFa 21">
                    <label for="precio">30€</label>
                    <input type="hidden" name="precio" value="30">
                    <input type="hidden" name="ID" value="23458">
                    <label for="">Cantidad</label>
                    <select name="Cantidad">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <input type="submit" id="btnEnviar" value="Enviar" name="btnEnviar"> 
                </form>             
            </div>
            <div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <label name="Nombre">Need for Speed</label>
                    <input type="hidden" name="Nombre" value="Need for Speed">
                    <label for="precio">20€</label>
                    <input type="hidden" name="precio" value="20">
                    <input type="hidden" name="ID" value="24568">
                    <label for="">Cantidad</label>
                    <select name="Cantidad">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <input type="submit" id="btnEnviar" value="Enviar" name="btnEnviar"> 
                </form>         
            </div>
            <div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <label name="Nombre">Call of Duty: Warzone</label>
                    <input type="hidden" name="Nombre" value="Call of Duty: Warzone">
                    <label for="precio">70€</label>
                    <input type="hidden" name="precio" value="70">
                    <input type="hidden" name="ID" value="57591">
                    <label for="">Cantidad</label>
                    <select name="Cantidad">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <input type="submit" id="btnEnviar" value="Enviar" name="btnEnviar"> 
                </form>         
            </div>
            <div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <label name="Nombre">God of War</label>
                    <input type="hidden" name="Nombre" value="God of War">
                    <label for="precio">49€</label>
                    <input type="hidden" name="precio" value="49">
                    <input type="hidden" name="ID" value="68549">
                    <label for="">Cantidad</label>
                    <select name="Cantidad">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <input type="submit" id="btnEnviar" value="Enviar" name="btnEnviar"> 
                </form>         
            </div>
            <a href="Carrito.php">Ver Compras</a>
        </div>
        <?php
        //Si se le da al boton enviar 
        if (isset($_REQUEST["btnEnviar"])) {
            //Capturamos los post en este caso lo he hecho request 
            //Hace _POST y _GET
            $ID = $_REQUEST["ID"];
            $Nombre = $_REQUEST["Nombre"];
            $precio = $_REQUEST["precio"];
            $Cantidad = $_REQUEST["Cantidad"];

            //Si se encuentra una cookie entramos
            if (isset($_COOKIE["Carrito"])) {

                //le quitamos a nuestro array / 
                $DatosCookie = stripslashes($_COOKIE['Carrito']);
                // Lo empaquetamos y al ser Bidimensional pues tenemos que poner true
                $Carrito = json_decode($DatosCookie, true);
            } else {
                //si no pues creamos un array que seria nuestro carrito esto lo haremos la primera vez que se compre
                $Carrito = array();
            }
            //Devuelve los valores de una sola columna del array de entrada
            // lo que hacemos es guarda el ID del producto para que no haya repeticiones 
            $lista = array_column($Carrito, 'ID');

            //Comprueba si un valor existe en un array
            //Si lo que le hemos enviado se encuentra en el array pues entramos
            if (in_array($ID, $lista)) {
                foreach ($Carrito as $keys => $values) {
                    //comprobamos que el ID sea el mismo 
                    if ($Carrito[$keys]["ID"] == $ID) {
                        //le sumamos los nuevos productos
                        $Carrito[$keys]['Cantidad'] = $Carrito[$keys]['Cantidad'] + $Cantidad;
                    }
                }
            } else {
                //si no hubiera existido en el array porque sea nuevo creamos el nuevo array
                $array = array(
                    "ID" => $_REQUEST["ID"],
                    "Nombre" => $_REQUEST["Nombre"],
                    "precio" => $_REQUEST["precio"],
                    "Cantidad" => $_REQUEST["Cantidad"]
                );
                //El array de productos
                $Carrito[] = $array;
            }
            //Empaquetamos el codigo para enviarlo a otra clase
            $array = json_encode($Carrito);
            //Por ultimo lo guardamos en una variable de cookies
            setcookie('Carrito', $array, time() + 60 * 60 * 24 * 7);

            echo "<script>alert('Se ha añadido nuevo producto al Carrito')</script>";
        }
        ?>
    </body>
</html>
