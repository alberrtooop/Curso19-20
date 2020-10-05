<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Primer ejercicio</title>
        <style type="text/css">
            table {
                border: 1px;
            }
            .colorRed{
                background-color: #ff0000;
            }
            .colorBlue{
                background-color: #0000ff;
            }
        </style>
    </head>
    <body>
        <?php
        echo "<h1> ejercicio 5</h1>";

        define("VALORDIEZ", 10);
        for ($i = 1; $i <= VALORDIEZ; $i++) {
            echo "<h1> Tabla del $i </h1>";
            for ($f = 1; $f <= VALORDIEZ; $f++) {
                echo "{$i} * {$f} = " . ($i * $f);
                echo "<br/>";
            }
        }

        echo "<h1> ejercicio 6</h1>";

        echo"<table>";

        for ($i = 0; $i <= 2; $i += 0.01) {
            echo"<tr>";
            echo "<td>" . $i . "</td> ";
            if (sin($i) < 0)
                echo "<td class = 'colorRed'>" . sin($i) . "</td> ";
            else
                echo "<td class = 'colorBlue'>" . sin($i) . "</td>";
            if (cos($i) < 0)
                echo "<td class = 'colorRed'>" . cos($i) . "</td>";
            else
                echo "<td class = 'colorBlue'>" . cos($i) . "</td>";
            echo"</tr>";
        }

        echo"</table>";

        echo "<h1> ejercicio 7</h1>";
        $Variable1 = -546;
        $Variable2 = -54;
        $Variable3 = -154;

        if ($Variable1 > $Variable2 || $Variable1 > $Variable3)
            echo "La variable " . '$Variable1' . " tiene el valor mayor:" . ($Variable1);
        else if ($Variable2 > $Variable1 || $Variable2 > $Variable3)
            echo "La variable " . '$Variable2' . " tiene el valor mayor:" . ($Variable2);
        else
            echo "La variable " . '$Variable3' . " tiene el valor mayor:" . ($Variable3);

        echo "<h1> ejercicio 8 </h1>";

        $i = 1;
        while ($i <= VALORDIEZ) {
            echo "<h1> Tabla del $i </h1>";
            $f = 1;
            while ($f <= VALORDIEZ) {
                echo "{$i} * {$f} = " . ($i * $f);
                echo "<br/>";
                $f++;
            }
            $i++;
        }
        ?>
    </body>
</html>