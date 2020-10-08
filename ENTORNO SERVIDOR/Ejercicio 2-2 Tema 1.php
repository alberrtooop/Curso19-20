<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style type="text/css">
        </style>
    </head>

    <body>
        <?php
        echo "<h1>Ejercicio 5</h1>";
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
        ?>
    </body>

</html>