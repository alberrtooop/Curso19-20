function Rango() {
    var txt = "";
    if (document.getElementById("NumeroValido").validity.rangeOverflow) {
        txt = "Value too large";
    } else if (document.getElementById("NumeroValido").validity.rangeUnderflow) {
        txt = "Input OK";
    }
    document.getElementById("CajaContenido").innerHTML = txt;
}




function EsNumeroPrimo(params) {

}