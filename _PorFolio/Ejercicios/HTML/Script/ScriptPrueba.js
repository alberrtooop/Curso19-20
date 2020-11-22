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
    var parrafoH1 = document.getElementById("ContarH1").innerHTML;
    var parrafoP = document.getElementById("ContarP").innerHTML;
    var texto = "El total de letras de H1 es: " + parrafoH1.length + "</br>";
    texto += "El total de letras de P es: " + parrafoP.length;
    document.getElementById("BotonContar").innerHTML = texto;
}
function InvertirColores() {
    document.body.style.backgroundColor = "black";
    document.body.style.color = "white";
}

function AumentarTamano() {
    document.getElementById("Aumento").style.fontSize = "x-large";
}

function MargenePuntos() {
    document.body.style.margin = "250px";
}

function VentanaActual() {
    document.getElementById("Tamano").innerHTML =
            "Tamaño de la ventana Actual: " + screen.width + " x " + screen.height;
}


function MostrarElemento() {
    document.getElementById("TextoOculto").style.display = 'block';
}
function OcultarElemento() {
    document.getElementById("TextoOculto").style.display = 'none';
}

function DirigirGoogle() {
    window.location.href = 'http://www.google.es';
}


/*
 * window.location.href = 'http://www.google.com';
 * window.location.assign("http://www.w3schools.com");
 * window.location = 'http://www.google.com';
 */