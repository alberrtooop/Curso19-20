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

            $contador = 10;
           for ($i=0; $i < $contador ; $i++) { 
               if ($i / 2 == 0){
                $MyArray = array($i);
                $contador--;
                }
           }

           foreach ($MyArray as $elemento ) {
               echo $elemento;
           }
        ?>
    </body>
</html>



































