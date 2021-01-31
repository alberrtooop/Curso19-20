<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Coockies y sesion </title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='Estilos.css'>
    </head>

    <body>
        <div id="BloqueCentrado">
            <div>
                <form method="post" action="" name="signin-form">
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" required />
                    </div>
                    <button type="submit" name="login" value="login">Log In</button>
                </form>         
            </div>
        </div>
    </body>

</html>

<?php
$Usuario = "123";
$pass = "123";

if ($_POST['username'] === $Usuario && $_POST['password'] === $pass) {
    session_start();
    //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario 
    setcookie("Usuario", $Usuario, time() + 60 * 60 * 24 * 7);
    //nombre del usuario logueado. 
    //Direccionamos a nuestra página principal del sistema. 
    header("Location: Productos.php");
} else {
    echo "Error en contraseña o usuario";
}
?>

