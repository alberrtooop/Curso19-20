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
    <script src="./JS/Prueba.js" language="javascript" type="text/javascript"></script>
    <title>Registro</title>
</head>

<body>
    <form class='contacto' id="formregistro" action="Seguridad.php" method="POST">
        <input type="hidden" name="ID" value="<?php echo $_POST['ID'] ?>" />
        <div id="ErrorPass"></div>
        <div><label>Email</label><input id="email" type='email' onBlur="comprobarEmail()" name="ReEmail" value='' required /></div>
        <div id="Pass"><label>Contraseña</label><input type='text' name="RePass" id="contrasena" value='' required /></div>
        <div id="Error"></div>
        <div><label>Repetir contraseña</label><input type='text' id="contrasenaconfirmar" name="RePass2" value='' required /></div>
        <div><label>Nombre</label><input type='text' value='' name="ReNom" required /></div>
        <div><label>Apellidos</label><input type='text' name="ReApe" value='' required /></div>
        <div>
            <select class="Select" name="Rol">
                <option value="Usuario">Usuario</option>
                <option value="Admin">Admin</option>
                <option value="SuperAdmin">Super Admin</option>
            </select>
        </div>
        <div><input type='submit' name="btnActualizar" value='Actualizar Datos'></div>
    </form>


    <script type="text/javascript">
        function comprobarEmail() {
            jQuery.ajax({
                url: 'Validar.php',
                data: 'Email=' + $("#email").val(),
                type: 'POST',
                success: function(data) {
                    var jsonData = JSON.parse(data);

                    if (jsonData.success == "1") {
                        $("#ErrorPass").show();
                        $("#ErrorPass").html("Dirección de correo electrónico ya en uso");
                        $('#ErrorPass').removeClass();
                        $("#ErrorPass").addClass('UsuarioNo');
                    } else if (jsonData.success == "0") {
                        $("#ErrorPass").show();
                        $("#ErrorPass").html("Dirección de correo electrónico Disponible");
                        $('#ErrorPass').removeClass();
                        $("#ErrorPass").addClass('UsuarioSi');
                    }
                    if ($("#email").val() === "") {
                        $('#ErrorPass').hide();
                    }
                },
                error: function(e) {}
            });
        }
    </script>

</body>

</html>