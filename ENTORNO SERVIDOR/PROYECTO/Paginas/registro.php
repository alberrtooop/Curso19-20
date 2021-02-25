<?php require '../Seguridad/Seguridad.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../CSS/EstiloReg.css'>
    <link rel='stylesheet' href='../CSS/Error.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../JS/Prueba.js" language="javascript" type="text/javascript"></script>
    <title>Registro</title>
</head>

<body>
    <?php include "../Templates/header.php"; ?>
    <div class="layout__content">
        <div class="layout-user__content">
            <h1 class="layout__title"><span>Datos personales</span></h1>
            <form class='contacto' id="formregistro" action="prueba.php" method="POST">
                <div class="form__fields">
                    <div class="form__column">
                        <div class="form-input-label"><label>Email</label><input id="email" type='email' onBlur="comprobarEmail()" name="Re_Email" value='' placeholder="Email" required /></div>
                    </div>
                    <div class="form__column">
                    </div>
                    <div class="form__column">
                        <div class="form-input-label"><label>Contraseña</label><input type='text' name="Re_Pass" id="contrasena" placeholder="Contraseña" value='' required /></div>
                        <div id="Error"></div>
                    </div>
                    <div class="form__column">
                        <div class="form-input-label">
                            <label>Repetir contraseña</label>
                            <input type='text' id="contrasenaconfirmar" name="Re_Pass2" placeholder="Repetir Contraseña" value='' required />
                            <div id="ErrorPass"></div>
                        </div>
                    </div>
                    <div class="form__column">
                        <div class="form-input-label"><label>Nombre</label><input type='text' value='' name="Re_Nombre" placeholder="Nombre" required /></div>
                    </div>
                    <div class="form__column">
                        <div class="form-input-label"><label>Apellidos</label><input type='text' name="Re_Apellido" value='' placeholder="Apellidos" required /></div>
                    </div>
                    <div class="form__column">
                        <div class="form-input-label">
                            <label>Dirección</label>
                            <input type='text' name="direccion" placeholder="Dirección" required />
                        </div>
                    </div>
                    <div class="form__column">
                        <div class="form-input-label">
                            <label>PISO/PUERTA U OTRO</label>
                            <input type='text' name="direccion_anadida" placeholder="opcional" />
                        </div>
                    </div>

                    <div class="form__column">
                        <div class="form-input-label">
                            <label>Código Postal</label>
                            <input type='text' name="CP" placeholder="Código Postal" />
                        </div>
                    </div>

                    <div class="form__column">
                        <div class="form-input-label">
                            <label>Provincia</label>
                            <select required name="provincia" class="Select">
                                <option value="">Elige Provincia</option>
                                <option value="Álava/Araba">Álava/Araba</option>
                                <option value="Albacete">Albacete</option>
                                <option value="Alicante">Alicante</option>
                                <option value="Almería">Almería</option>
                                <option value="Asturias">Asturias</option>
                                <option value="Ávila">Ávila</option>
                                <option value="Badajoz">Badajoz</option>
                                <option value="Baleares">Baleares</option>
                                <option value="Barcelona">Barcelona</option>
                                <option value="Burgos">Burgos</option>
                                <option value="Cáceres">Cáceres</option>
                                <option value="Cádiz">Cádiz</option>
                                <option value="Cantabria">Cantabria</option>
                                <option value="Castellón">Castellón</option>
                                <option value="Ceuta">Ceuta</option>
                                <option value="Ciudad Real">Ciudad Real</option>
                                <option value="Córdoba">Córdoba</option>
                                <option value="Cuenca">Cuenca</option>
                                <option value="Gerona/Girona">Gerona/Girona</option>
                                <option value="Granada">Granada</option>
                                <option value="Guadalajara">Guadalajara</option>
                                <option value="Guipúzcoa/Gipuzkoa">Guipúzcoa/Gipuzkoa</option>
                                <option value="Huelva">Huelva</option>
                                <option value="Huesca">Huesca</option>
                                <option value="Jaén">Jaén</option>
                                <option value="La Coruña/A Coruña">La Coruña/A Coruña</option>
                                <option value="La Rioja">La Rioja</option>
                                <option value="Las Palmas">Las Palmas</option>
                                <option value="León">León</option>
                                <option value="Lérida/Lleida">Lérida/Lleida</option>
                                <option value="Lugo">Lugo</option>
                                <option value="Madrid">Madrid</option>
                                <option value="Málaga">Málaga</option>
                                <option value="Melilla">Melilla</option>
                                <option value="Murcia">Murcia</option>
                                <option value="Navarra">Navarra</option>
                                <option value="Orense/Ourense">Orense/Ourense</option>
                                <option value="Palencia">Palencia</option>
                                <option value="Pontevedra">Pontevedra</option>
                                <option value="Salamanca">Salamanca</option>
                                <option value="Segovia">Segovia</option>
                                <option value="Sevilla">Sevilla</option>
                                <option value="Soria">Soria</option>
                                <option value="Tarragona">Tarragona</option>
                                <option value="Tenerife">Tenerife</option>
                                <option value="Teruel">Teruel</option>
                                <option value="Toledo">Toledo</option>
                                <option value="Valencia">Valencia</option>
                                <option value="Valladolid">Valladolid</option>
                                <option value="Vizcaya/Bizkaia">Vizcaya/Bizkaia</option>
                                <option value="Zamora">Zamora</option>
                                <option value="Zaragoza">Zaragoza</option>
                            </select>
                            <svg class="form-input-select__arrow" width="8" height="8">
                                <path d="M.793 3h6.414L4 6.207.793 3z"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="form__column">
                        <div class="form-input-label">
                            <label>Localidad</label>
                            <input type='text' name="localidad" placeholder="Localidad" />
                        </div>
                    </div>

                    <div class="form__column">
                        <div class="form-input-label">
                            <label>Teléfono</label>
                            <input type='text' name="telefono" placeholder="Teléfono" />
                        </div>
                    </div>

                    <div><input type='submit' name="btnCrear" value='Crea cuenta'></div>
                </div>

            </form>
        </div>
    </div>

</body>

</html>

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