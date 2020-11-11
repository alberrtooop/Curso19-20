var numeroGuardar;
var operador;
var numero;


function SacarNumero(numero) {
    var caja2 = document.calculadora.txtcaja.value;

    //var resultado = Mostar();
    if (caja2 == 0 || isNaN(numero)) {
        document.calculadora.txtcaja.value = numero;
    } else {
        document.calculadora.txtcaja.value = caja2 + numero;
    }
}

function Igual() {
    document.calculadora.txtcaja.value = eval(document.calculadora.txtcaja.value);
}
function Limpiar() {
    document.calculadora.txtcaja.value = 0;
}