<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Primer ejercicio</title>
        <style type="text/css">
        </style>
    </head>
    <body>
        <?php
        echo "<h1>Ejercicio 2 Tema 1</h1>";
        echo "<h2>Ejercicio 1</h2>";
        $contador = 10;
        $Total = 0;
        for ($i = 0; $i <= $contador; $i++) {
            $Total = $i * 2;
            $MyArray [$i] = $Total;
        }

        //muestra el array 
        print_r($MyArray);

        echo "<h2>Ejercicio 2</h2>";
        for ($i = 1; $i <= 1; $i++) {
            echo "El dado a sacado un " . rand(1, 6) . "</br>";
        }

        echo "<h2>Ejercicio 3</h2>";
        echo "Vamos a simular Tiradas </br>";

        $dados = rand(2, 6);
        $totalPuntuacion = 0;
        for ($i = 1; $i <= $dados; $i++) {
            $puntuacionDados = rand(1, 6);
            $totalPuntuacion += $puntuacionDados;
            echo "El valor de la tirada " . $i . " es " . $puntuacionDados;
            echo "</br>";
        }
        echo "El total de tiradas son " . $dados . " Tienen un total de " . $totalPuntuacion . " puntos </br>";

        echo "<h2>Ejercicio 4</h2>";
        $Nnegativo = 0;
        $Npositivo = 0;
        $Ncero = 0;

        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 6; $j++) {
                $NumeroMatriz = rand(-5, 5);
                if ($NumeroMatriz < 0) {
                    $Nnegativo++;
                } else if ($NumeroMatriz > 0) {
                    $Npositivo++;
                } else {
                    $Ncero++;
                }
                $ArrayBi [$i] [$j] = $NumeroMatriz;
            }
        }
        echo "El total de Positivos son " . $Npositivo . "</br>";
        echo "El total de Negativo son " . $Nnegativo . "</br>";
        echo "El total de ceros son " . $Ncero . "</br>";
        //muestra el array 
        echo "<pre>";
        var_dump($ArrayBi);
        echo"</pre>";
        ?>
    </body>
</html>



































