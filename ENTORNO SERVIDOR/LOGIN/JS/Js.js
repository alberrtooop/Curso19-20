$(document).ready(function () {
    const Mayuscula = new RegExp("^(?=.*[A-Z])");
    const Especiales = new RegExp("^(?=.*[!@#$&*])");
    const Numeros = new RegExp("^(?=.*[0-9])");
    const Minusculas = new RegExp("^(?=.*[a-z])");
    const longitudc = new RegExp("^(?=.{8,})");

    $('[name=RePass]').keyup(function () {
        var pass1 = $('[name=RePass]').val();
        if (Mayuscula.test(pass1) && Especiales.test(pass1) && Numeros.test(pass1) &&
        Minusculas.test(pass1) && longitudc.test(pass1) ) {
            $('#Error').text('Valido');
        } else {
            $('#Error').text('invalido');
        }
    });


    /*
    //variables
    var pass1 = $('[name=RePass]');
    var pass2 = $('[name=RePass2]');

    var confirmacion = "Las contraseñas si coinciden";
    var longitud = "La contraseña debe estar formada entre 6-10 carácteres (ambos inclusive)";
    var negacion = "No coinciden las contraseñas";
    var vacio = "La contraseña no puede estar vacía";
    var requisito = "Max 8 caracteres";
    //oculto por defecto el elemento span
    var span = $('<span></span>').insertAfter($('#Error'));
    span.hide();
    //función que comprueba las dos contraseñas
    function coincidePassword() {
        var valor1 = pass1.val();
        var valor2 = pass2.val();

        //muestro el span
        span.show().removeClass();
        //condiciones dentro de la función
        if (valor1 != valor2) {
            span.text(negacion).addClass('negacion');
        }
        if (valor1.length == 0 || valor1 == "") {
            span.text(vacio).addClass('negacion');
        }
        if (valor1.length < 6 || valor1.length > 10) {
            span.text(longitud).addClass('negacion');
        }
        if (valor1.length != 0 && valor1 == valor2) {
            if(passwordRegex.test(valor1) || passwordRegex.test(valor2)){
                
                span.text(confirmacion).removeClass("negacion").addClass('confirmacion');
            }
            //span.text(requisito).addClass('negacion'); 
        }
    }
    //ejecuto la función al soltar la tecla
    pass2.keyup(function () {
        coincidePassword();
    });*/
});
