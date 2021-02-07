<!--php require_once 'Seguridad.php'; ?>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./CSS/estilos.css'>
    <title>Registro</title>
</head>
<body>  
        <form class='contacto' action="Seguridad.php" method="POST">
            <div><label>Email</label><input type='email' name="ReEmail" value=''/></div>
            <div><label>Contraseña</label><input type='password' name="RePass" value=''/></div>
            <div><label>Repetir contraseña</label><input type='password' name="RePass2" value=''/></div>
            <div><label>Nombre</label><input type='text' value='' name="ReNom"/></div>
            <div><label>Apellidos</label><input type='text' name="ReApe" value=''/></div>
            <div id="Error"></div>
            <div><input type='submit' name="btnCrear" value='Crea cuenta'></div>
        </form>
</body>
</html>