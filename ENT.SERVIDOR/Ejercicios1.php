<?php
$valor1 = 0;
$valor2 = 45;
$ValorTotal = 0;
define("TAM",10);
$numeroInicio = 1 ;


echo "<!DOCTYPE html>" ;
echo "<html>" ;
    echo "<body>";


    echo $ValorTotal = $valor1 + $valor2 ;

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

    echo "<select name='select'>"
    for ($i=0; $i < TAM ; $i++) { 
        echo " <option value='Valor'.$i>Valor $i</option>" 
    }
    
    echo " </select>"



    echo "</body>" ;
echo "</html>"; 

?>