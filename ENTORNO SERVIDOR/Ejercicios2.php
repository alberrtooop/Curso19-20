
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

        echo "<h1> ejercicio 5</h1>" ;

            define("VALORDIEZ", 10);
            for ($i= 1; $i <= VALORDIEZ ; $i++) { 
                echo "<h1> Tabla del $i </h1>" ;
              for ($f=1; $f <= VALORDIEZ ; $f++) { 
                    echo "{$i} * {$f} = " . ($i * $f) ;
                    echo "<br/>";
              }
            }
            
            echo "<h1> ejercicio 6</h1>" ;







            
            echo "<h1> ejercicio 7</h1>" ;
            $Variable1 = -546;
            $Variable2 = -54;
            $Variable3 = -154;

            

            if ($Variable1 > $Variable2 || $Variable1 > $Variable3)
                echo "La variable ". '$Variable1' ." tiene el valor mayor:". ($Variable1);
            else if($Variable2 > $Variable1 || $Variable2 > $Variable3)
                echo "La variable ". '$Variable2' ." tiene el valor mayor:". ($Variable2);
            else
                echo "La variable ". '$Variable3' ." tiene el valor mayor:". ($Variable3);

            echo "<h1> ejercicio 8 </h1>" ;

            $i = 1;
            while ($i <= VALORDIEZ) {
                echo "<h1> Tabla del $i </h1>" ;  
                $f = 1;
                while ($f <= VALORDIEZ) {

                   echo "{$i} * {$f} = " . ($i * $f) ;
                   echo "<br/>";

                    $f++;
                }
                $i++;

            }
        



     echo"<table>";        
        
        for($x = 0;$x <= 2; $x += .05)
        {
            echo"<tr>";
            echo "<td>".$x."</td> ";
            if(sin($x) < 0.5)
                echo "<td class = 'colorRed'>".sin($x)."</td> ";
            else
                echo "<td class = 'colorBlue'>" .sin($x)."</td>";
            if(cos($x) < 0.5)
                echo "<td class = 'colorRed'>".cos($x) ."</td>";
            else
                echo "<td class = 'colorBlue'>" .cos($x). "</td>";
             echo"</tr>";
        }
        
        echo"</table>";




        function muestra($valor){
            global $nrenglon;
            if($nrenglon%2)
            {
                $fondo="#ffff00";
            }else{
                $fondo="#ffffff";
            }
            if($valor<0.5)
            {
                $color="red";
            }else{
                $color="blue";
            }
            echo "<td bgcolor='$fondo'><font color='$color'>$valor</font></td>\n";
        }
        echo"<table border='1'>";
        
        $nrenglon=0;
        for($x=0;$x<=2;$x+=.05)
        {
            echo"<tr>";
            muestra($x);
            muestra(sin($x));
            muestra(cos($x));
            echo"</tr>";
        }
?>
    </body>
</html>