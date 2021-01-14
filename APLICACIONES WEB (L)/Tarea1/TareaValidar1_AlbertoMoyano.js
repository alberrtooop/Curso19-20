$(document).ready(function () {
    $("#butonPrimo").click(function () {
        var numeroValor = $("#NumeroValido").val();
        var primo = true;

        if (numeroValor <= 1) {
            primo = false
        }
        for (let index = 2; index < numeroValor; index++) {
            if (numeroValor % index == 0) {
                primo = false
            }
        }
        if (primo === false) {
            return $("#CajaContenido").append("<p> No es Primo </p>");
        }
        else {
            return $("#CajaContenido").append("<p>" + numeroValor + "</p>");
        }
    });
});

function Valido() {
    var numeroValor = document.getElementById("NumeroValido");
    if (!numeroValor.checkValidity()) {
        document.getElementById("Valido").innerHTML = "<p>" + numeroValor.validationMessage + " </p>";
    } else {
        document.getElementById("Valido").innerHTML = "<p> Ok </p>";
    }
}


