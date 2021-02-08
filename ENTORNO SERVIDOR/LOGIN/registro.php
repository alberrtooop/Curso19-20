<?php require_once 'Seguridad.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./CSS/estilos.css'>
    <link rel='stylesheet' href='./CSS/Error.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./JS/Js.js" language="javascript" type="text/javascript"></script>
    <title>Registro</title>
</head>
<body>  
    <form class='contacto' id="formregistro" action="Seguridad.php" method="POST">
        <div><label>Email</label><input type='email' name="ReEmail" value='' required/></div>
        <div><label>Contraseña</label><input type='text' name="RePass" id="contrasena" value='' required/></div>
        <div><label>Repetir contraseña</label><input type='text' id="contrasenaconfirmar" name="RePass2" value='' required/></div>
        <div><label>Nombre</label><input type='text' value='' name="ReNom" required/></div>
        <div><label>Apellidos</label><input type='text' name="ReApe" value='' required/></div>
        <span id="Error"></span>
        <div><input type='submit' name="btnCrear" value='Crea cuenta'></div>
    </form>        
</body>
</html>