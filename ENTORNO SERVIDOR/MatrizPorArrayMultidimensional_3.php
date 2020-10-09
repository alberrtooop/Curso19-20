<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style type="text/css">
        table {
            font-family: Verdana, Geneva, sans-serif;
            border: 1px solid #948473;
            background-color: #FFE3C6;
            width: 10%;
            height: 20%;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $MatrizAlumno = array(array(1, 14, 8, 3), array(6, 19, 7, 2), array(3, 13, 4, 1));

    echo "<h1>Contar Matriz por Array Multidimensional</h1>";
    echo '<table>';
    foreach ($MatrizAlumno as $Array) {
        echo '<tr>';
        foreach ($Array as $Elemento) {
            echo '<td>' . $Elemento . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    //Calcular los alumnos que hay en ingles
    $ingles = 0;
    for ($i = 0; $i < count($MatrizAlumno[0]) - 1; $i++) {
        $ingles += $MatrizAlumno[$i][0];
    }

    //Calcular los alumnos que hay en frances
    $frances = 0;
    for ($i = 0; $i < count($MatrizAlumno[0]) - 1; $i++) {
        $frances += $MatrizAlumno[$i][1];
    }

    //Calcular los alumnos que hay en aleman
    $aleman = 0;
    for ($i = 0; $i < count($MatrizAlumno[0]) - 1; $i++) {
        $aleman += $MatrizAlumno[$i][2];
    }

    //Calcular los alumnos que hay en ruso
    $ruso = 0;
    for ($i = 0; $i < count($MatrizAlumno[0]) - 1; $i++) {
        $ruso += $MatrizAlumno[$i][3];
    }

    //Calcular Alumnos por nivel basicos 
    $basico = 0;
    for ($i = 0; $i < count($MatrizAlumno[0]); $i++) {
        $basico += $MatrizAlumno[0][$i];
    }

    //Calcular Alumnos por nivel Intermedio
    $inter = 0;
    for ($i = 0; $i < count($MatrizAlumno[0]); $i++) {
        $inter += $MatrizAlumno[1][$i];
    }

    //Calcular Alumnos por nivel perfeccionado
    $perfe = 0;
    for ($i = 0; $i < count($MatrizAlumno[0]); $i++) {
        $perfe += $MatrizAlumno[2][$i];
    }
    echo "</br>";
    echo "Hay <b>" . $basico . " </b> alumnos con un nivel basico </br>";
    echo "Hay <b>" . $inter . " </b> alumnos con un nivel intermedio </br>";
    echo "Hay <b>" . $perfe . " </b> alumnos con un nivel perfeccionado </br>";
    echo "Hay <b>" . $ingles . " </b> alumnos que estudian Ingles </br>";
    echo "Hay <b>" . $frances . " </b> alumnos que estudian Frances </br>";
    echo "Hay <b>" . $aleman . " </b> alumnos que estudian Aleman </br>";
    echo "Hay <b>" . $ruso . " </b> alumnos que estudian Ruso </br>";
    ?>
</body>

</html>