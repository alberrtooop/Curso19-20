<?php
$valor1 = 68;
$valor2 = 45;
$ValorTotal = 0;
define("TAM",10);
$numeroInicio = 1 ;


echo "<!DOCTYPE html>" ;
echo "<html>" ;
    echo "<body>";

    echo "<h1>Ejercicio 1 </h1>";

    echo "{$valor1} + {$valor2} = ".($valor1 + $valor2);

    echo "<h1>Ejercicio 2 </h1>";

    phpinfo();

    
    echo "<h1>Ejercicio 3 </h1>";

    for ($i=0; $i < TAM ; $i++) { 
       echo "</br>";
        for ($f=0; $f < TAM ; $f++) { 
            echo "&nbsp; &nbsp; &nbsp;";
            echo $numeroInicio++;
        }

    }
    echo "<h1>Ejercicio 4 </h1>";

    echo "<select name='select'>";
    for ($i=1; $i <= TAM ; $i++) { 
        echo " <option value ='Valor 1'> Valor $i</option>" ;
    }
    
    echo " </select>";


    echo "</body>" ;
echo "</html>"; 

?>