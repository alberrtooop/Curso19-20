function cambiarModo() {
    var cuerpoweb = document.body;
    cuerpoweb.classList.toggle("oscuro");
}

var fontSize = 12;
function Disminuir() {
    fontSize -= 1;
    document.getElementById('fuente1').style.fontSize = fontSize +'px';
}

function Aumentar() {
    fontSize += 1;
    document.getElementById('fuente1').style.fontSize = fontSize +'px';
}