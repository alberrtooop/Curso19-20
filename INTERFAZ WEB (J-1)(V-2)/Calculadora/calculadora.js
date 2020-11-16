var numeroGuardar;
var operador;
var numero;
var nuevo = false;

window.open("Calculadora.html","ventana1","width=400,height=400,resizable=no");
function SacarNumero(numero) {
    var caja = document.calculadora.txtcaja.value;
    var caja2 = document.calculadora.txtcaja2.value;

    if (caja === "0") {
        document.calculadora.txtcaja.value = numero;
        document.calculadora.txtcaja2.value = numero;
    } else {
        if (nuevo === true) {
            if (numero === "+" || numero === "-" || numero === "*" || numero === "/") {
                document.calculadora.txtcaja.value = caja + numero;
                document.calculadora.txtcaja2.value = caja2.concat(numero);
            } else {
                document.calculadora.txtcaja.value = numero;
                document.calculadora.txtcaja2.value = numero;
            }
            nuevo = false;
        } else {
            document.calculadora.txtcaja.value = caja + numero;
            document.calculadora.txtcaja2.value = caja2.concat(numero);
        }

    }
}

function backSpace() {
    var value = document.getElementById("txtcaja").value;
    if (value.substr(0, value.length - 1) === "") {
        document.getElementById("txtcaja").value = "0";
        document.getElementById("txtcaja2").value = "";
    } else {
        document.getElementById("txtcaja").value = value.substr(0, value.length - 1);
        document.getElementById("txtcaja2").value = value.substr(0, value.length - 1);
    }
}


function Coma() {
    var caja = document.calculadora.txtcaja.value;
    document.calculadora.txtcaja.value = caja + ".";
    document.calculadora.txtcaja2.value = caja + ".";
}

function MasMenos() {
    document.calculadora.txtcaja.value *= -1;
    document.calculadora.txtcaja2.value *= -1;
}

function Igual() {
    var Resultado = document.calculadora.txtcaja.value;
    var Resultado2 = document.calculadora.txtcaja2.value;
    try {
        if (isNaN(eval(Resultado)) || Resultado.includes('//')) {
            document.calculadora.txtcaja.value = "SyntaxError";
        } else {
            document.calculadora.txtcaja.value = eval(Resultado2);
            nuevo = true;
        }

    } catch (e) {
        document.calculadora.txtcaja.value = "SyntaxError";
    }

}
function Limpiar() {
    document.calculadora.txtcaja2.value = "";
    document.calculadora.txtcaja.value = "0";
}