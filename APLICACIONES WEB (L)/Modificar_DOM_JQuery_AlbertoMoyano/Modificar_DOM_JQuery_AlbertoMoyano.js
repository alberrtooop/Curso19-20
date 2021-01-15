$(document).ready(function () {
    var ArrayTeclasMenor = [];
    var ArrayTeclasMayor = [];
    $(document).keypress(function () {
        var list = document.getElementById('ValorA');
        var listP = document.getElementById('ValorP');
        var key = event.keyCode;

        if (key >= 48 && key <= 52) {

            ArrayTeclasMenor.push(String.fromCharCode(key));
            var d = MenorAMayor();
            list.innerHTML = ArrayTeclasMenor;
        } else if (key >= 53 && key <= 57) {

            ArrayTeclasMayor.push(String.fromCharCode(key));
            d = MenorAMayor();
            listP.innerHTML = ArrayTeclasMayor;
        }
    });

    //Ordenar mi Array
    function MenorAMayor() {
        ArrayTeclasMenor.sort(function (a, b) { return a - b });
        ArrayTeclasMayor.sort(function (a, b) { return a - b });
    }
});


