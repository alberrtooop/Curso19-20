<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style type="text/css">
            table {
                border-collapse: collapse;
            }
            table, th, td{
                background-color: #83aec0;
                border: 1px;
                text-align: center;
                height: 30%;
                width: 20%;
            }
        </style>
    </head>

    <body>
        <?php
        echo "<h1>Ejercicio 8</h1>";
        $ArrayAsociativo = array(
            'Juan' => array(
                'altura' => 175,
                'pelo' => "rubio",
                'ojos' => "azules"
            ),
            'maria' => array(
                'altura' => 168,
                'pelo' => "castaña",
                'ojos' => "marrones"
            ),
            'pedro' => array(
                'altura' => 180,
                'pelo' => "castaño",
                'ojos' => "verdes"
            )
        );
        echo "La altura de juan es " . $ArrayAsociativo['Juan']['altura'] . "</br>";
        echo "Los ojos de maria son " . $ArrayAsociativo['maria']['ojos'] . "</br>";
        echo "El pelo de pedro es " . $ArrayAsociativo['pedro']['pelo'] . "</br>";

        echo "<h1>Ejercicio 9</h1>";

        //Creo una matriz Vacia
        $matrizBi = array();

        $contador = 1;
        //como sabemos que va a ser una matriz de 6 * 4 
        for ($i = 0; $i < 6; $i++) {
            for ($j = 0; $j < 4; $j++) {
                //los multiplos de 3 son el numero por 3 y tenemos un contador que nos controla eso 
                $matrizBi[$i][$j] = $contador * 3;
                $contador++;
            }
        }

        echo '<table>';
        foreach ($matrizBi as $Array) {
            echo '<tr>';
            foreach ($Array as $Elemento) {
                echo '<td>' . $Elemento . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';

        echo "<h1>Ejercicio 10</h1>";
        $matriRand = array();


        //como sabemos que va a ser una matriz de 6 * 6
        for ($i = 0; $i < 6; $i++) {
            for ($j = 0; $j < 6; $j++) {
                //vamos a crear una matriz con numeros random con numeros del 1 al 99
                $matriRand[$i][$j] = rand(1, 99);
            }
        }

        echo '<table>';
        foreach ($matriRand as $Array) {
            echo '<tr>';
            foreach ($Array as $Elemento) {
                echo '<td>' . $Elemento . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';

        echo "</br>";

        $Nmayor = 0;
        $NFila = 0;
        for ($i = 0; $i < count($matriRand); $i++) {
            $suma = 0;
            //cuento los valores de la fila
            for ($j = 0; $j < count($matriRand); $j++) {
                $suma += $matriRand[$i][$j];
            }
            /* comparo que fila es mayor y lo paso al numero de fila
              $Nmayor lo igualo al ultimo numero de la suma y asi se cual es el mayor */

            if ($suma > $Nmayor) {
                $NFila = $i;
                $Nmayor = $suma;
            }

            echo "FILA " . $i . " = " . $suma;
            echo "</br>";
        }
        echo "</br>";
        echo "La fila " . $NFila . " es la mayor en la suma de numeros ";
        ?>
    </body>
</html>