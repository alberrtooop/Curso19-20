<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style type="text/css"></style>
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

    echo "<h1>Ejercicio 6</h1>";

    $matrizBi[6][4] = array();


    for ($i = 0; $i < count($matrizBi); $i++) {
        if ($i % 3 == 0) {
            $matrizBi = [0][$i];
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

    ?>
</body>

</html>