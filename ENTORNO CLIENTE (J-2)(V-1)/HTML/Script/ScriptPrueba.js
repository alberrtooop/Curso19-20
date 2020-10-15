function VersionNavegador() {
    var txt = "Version Navegador: " + navigator.appVersion;
    document.getElementById("Version").innerHTML = txt;
    document.getElementById("Version").style.backgroundColor = "red";
}
function VersionAnterior() {
    var txt = "Ver Version: ";
    document.getElementById("Version").innerHTML = txt;
    document.getElementById("Version").style.backgroundColor = "white";
}

function MostarURL() {
    document.getElementById("URL").innerHTML = window.location;
}

function ContarLetras() {
    Total = document.getElementByClass("Contar").value;
    numeroCaracteres = Total.length;
    //Quitar Caracteres 
    inicioBlanco = /^ /;
    finBlanco = / $/;
    variosBlancos = /[ ]+/g;
    //Reemplazarlos
    Total = Total.replace(inicioBlanco, "");
    Total = Total.replace(finBlanco, "");
    Total = Total.replace(variosBlancos, " ");
    //
    textoAreaDividido = Total.split(" ");
    numeroPalabras = textoAreaDividido.length;

    if (numeroCaracteres == 1) {
        tC = "carácter";
    } else {
        tC = " caracteres";
    }
    if (numeroPalabras == 1) {
        tP = "palabra";
    } else {
        tP = " palabras";
    }

    alert(numeroCaracteres + tC + "\n" + numeroPalabras + tP);


}





/*
 * window.location.href = 'http://www.google.com';
 * window.location.assign("http://www.w3schools.com");
 * window.location = 'http://www.google.com';
 */