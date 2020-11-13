var numeroGuardar;
var operador;
var numero;





function SacarNumero(numero) {
    var caja = document.calculadora.txtcaja.value;
    var caja2 = document.calculadora.txtcaja2.value;
    //var resultado = Mostar();  || isNaN(numero)
    if (numero === "+" || numero === "-" || numero === "*" || numero === "/") {
        document.calculadora.txtcaja2.value = caja.concat(numero);
        document.calculadora.txtcaja.value = caja + numero;

    } else {
        if (caja !== "0") {
            document.calculadora.txtcaja.value = numero;
            document.calculadora.txtcaja2.value = caja2.concat(numero);
        }

        else {
            if (caja.charAt(0) !== "0") {
                document.calculadora.txtcaja.value = numero;
                document.calculadora.txtcaja2.value = caja2.concat(numero);
            }
        }
    }

}
function Coma() {
    var caja = document.calculadora.txtcaja.value;

    if (caja.includes('.') < 1) {
        document.calculadora.txtcaja.value = caja + ".";
        document.calculadora.txtcaja2.value = caja + ".";
    }
}

function MasMenos() {
    var caja = document.calculadora.txtcaja.value;

    if ((caja === "-") < 1) {
        document.calculadora.txtcaja.value *= -1;
        document.calculadora.txtcaja2.value *= -1;
    }
}


function Igual() {
    let Resultado = document.calculadora.txtcaja2.value;
    document.calculadora.txtcaja.value = eval(Resultado);
}
function Limpiar() {
    document.calculadora.txtcaja2.value = "";
    document.calculadora.txtcaja.value = "0";
}