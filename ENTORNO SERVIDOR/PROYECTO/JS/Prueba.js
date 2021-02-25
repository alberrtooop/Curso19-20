$(document).ready(function () {
    $('#contrasena').keyup(function () {
        $('#Error').html(checkStrength($('#contrasena').val()));
    });

    //ejecuto la función al soltar la tecla
    $('#contrasenaconfirmar').keyup(function () {
        coincidePassword();
    });
    $('#contrasena').keyup(function () {
        coincidePassword();
    });


    function checkStrength(password) {
        var strength = 0
        if (password.length < 8) {
            $('#Error').removeClass();
            $('#Error').addClass('Short');
            return "<span class='Izquierda'> Muy poco Segura </span>";
        }
        if (password.length > 7) strength += 0.65
        // If password contains both lower and uppercase characters, increase strength value.
        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 0.35
        // If it has numbers and characters, increase strength value.
        if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 0.5
        // If it has one special character, increase strength value.
        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 0.65
        // If it has two special characters, increase strength value.
        if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 0.85
        // Calculated strength value, we can return messages
        // If value is less than 2
        if (strength < 2.5) {
            $('#Error').removeClass()
            $('#Error').addClass('Weak')
            return "<span class='Izquierda'> Poco Segura </span>";
        } else if (strength == 3) {
            $('#Error').removeClass()
            $('#Error').addClass('Good')
            return "<span class='Izquierda'> Segura </span>";
        } else {
            $('#Error').removeClass()
            $('#Error').addClass('Strong')
            return "<span class='Izquierda'> Muy Segura </span>";
        }
    }
    //variables
    var pass1 = $('[name=RePass]');
    var pass2 = $('[name=RePass2]');

    function coincidePassword() {
        var valor1 = pass1.val();
        var valor2 = pass2.val();

        if (valor1 == valor2) {
            $(document).ready(function () {
                $('#contrasena').css('border', '1px solid white');
                $('#contrasena').css('box-shadow', '0 0 0 3px white');
                $('#contrasenaconfirmar').css('border', '1px solid white');
                $('#contrasenaconfirmar').css('box-shadow', '0 0 0 3px white');
            });
        } else if (valor1 != "") {
            $(document).ready(function () {
                $('#contrasena').css('border', '1px solid red');
                $('#contrasena').css('box-shadow', '0 0 0 1px red');
            });
        } else if (valor2 != "") {
            $(document).ready(function () {
                $('#contrasenaconfirmar').css('border', '1px solid red');
                $('#contrasenaconfirmar').css('box-shadow', '0 0 0 1px red');
            });

        }else{
            $(document).ready(function () {
                $('#contrasena').css('border', '1px solid red');
                $('#contrasena').css('box-shadow', '0 0 0 1px red');
                $('#contrasenaconfirmar').css('border', '1px solid red');
                $('#contrasenaconfirmar').css('box-shadow', '0 0 0 1px red');
            });
        }
    }
});
