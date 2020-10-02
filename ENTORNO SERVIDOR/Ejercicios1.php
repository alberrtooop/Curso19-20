<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Primer ejercicio</title>
        <style type="text/css">
            table {
                border: 1px;
            }
            .color{
                background-color: #6db499;
            }
        </style>
    </head>
    <body>
        <?php
        $valor1 = 68;
        $valor2 = 46;
        $ValorTotal = 0;
        define("TAM", 10);
        $numeroInicio = 1;

        echo "<h1>Ejercicio 1 </h1>";

        echo "{$valor1} + {$valor2} = " . ($valor1 + $valor2);

        echo "<h1>Ejercicio 2 </h1>";

        phpinfo();


        echo "<h1>Ejercicio 3 </h1>";

        echo "<table>"; //creamos la tabla
        $contador = 1;
        for ($i = 1; $i <= TAM; $i++) {
            if ($i % 2 == 0) //Si la división de la variable $n1 entre dos da 0 creamos una fila de color
                echo "<tr>";
            else
                echo "<tr class = 'color'>"; //creamos fila blanca cuando no sea divisible entre 2
            for ($j = 1; $j <= TAM; $j++) {
                echo "<td>", $contador, "</td>"; //creamos una celda y mostramos el número
                $contador++; //sumamos 1 al número mostrado para la siguiente vuelta del bucle
            }
            echo "</tr>"; //cerramos la fila
        }
        echo "</table>";

        echo "<h1>Ejercicio 4 </h1>";

        echo "<select name='selector'>";
        for ($i = 1; $i <= TAM; $i++) {
            echo " <option value ='Valor 1'> Valor $i</option>";
        }
        echo " </select>";
        ?>
    </body>
</html>