var numeroGuardar;
var operador;
var numero;

function SacarNumero(numero) {
    pantalla = document.getElementById("textoPantalla").innerHTML = parseInt(numero);
    numeroGuardar = parseInt(numero);
    return numeroGuardar;
}

function Accion(operador) {
    switch (operador) {
        case '+':
            pantalla = document.getElementById("textoPantalla");
            pantalla.innerHTML = '+';
            numeroGuardar = eval(SacarNumero(numero)) ;

            break;
        case '-':
            pantalla = document.getElementById("textoPantalla");
            pantalla.innerHTML = '-';
            numeroGuardar = eval(SacarNumero(numero));

            break;

    }
}

function Igual() {
    document.getElementById("textoPantalla").innerHTML = numeroGuardar;
}