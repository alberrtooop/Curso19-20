<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/EstiloLog.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <title>Registro</title>
</head>

<body>
    <?php include "../Templates/header.php"; ?>
    <div class="FormCentrado">
        <div class="section-log-in">
            <h2 class="logon-view__section-title">
                <span>Inicia sesión</span>
            </h2>
            <form class="contacto" id="contacto" action="Seguridad.php" method="POST">
                <div>
                    <label for="Email">Usuario</label>
                    <input type="text" name="ValUsu" id="Email" />
                </div>
                <div>
                    <label for="Pass">Contraseña</label>
                    <input type="password" name="Valpass" id="Pass" />
                </div>
                <div class="divSubmit">
                    <input type="submit" name="btnEntrar" value="INICIAR SESIÓN" />
                </div>
                <div class="letraA"><a href="registro.php">Registrate ahora</a></div>
            </form>
        </div>

        <div class="section-register">
            <h2 class="logon-view__section-title">
                <span>REGÍSTRATE</span>
            </h2>
            <div class="contacto" id="Registro">

                <p class="claseP">SI TODAVÍA NO TIENES UNA CUENTA DE USUARIO DE VETIMENTE.COM UTILIZA ESTA OPCIÓN PARA ACCEDER
                    AL FORMULARIO DE REGISTRO.</p>

                <p class="claseP">TE SOLICITAREMOS LA INFORMACIÓN IMPRESCINDIBLE PARA AGILIZAR EL PROCESO DE COMPRA.</p>

                <div class="divSubmit botonRegistro" id="botonRegistro">
                    <button onclick="window.location.href='registro.php'" id="botonRegistro" >CREAR CUENTA</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>