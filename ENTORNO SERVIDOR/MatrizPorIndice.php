<!DOCTYPE html>
<html>

<head>
	<title>
		<style type="text/css">
			table {
				border: 1px solid;
			}
		</style>
	</title>
</head>

<body>
	<?php
	$MatrizAlumno = array(array(1, 14, 8, 3), array(6, 19, 7, 2), array(3, 13, 4, 1));

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
		echo '<br />';
	}
	echo $mat;

	//Calcular los alumnos que hay en frances

	//Calcular Alumnos por nivel basicos 
	$basico = 0;
	for ($i = 0; $i < count($MatrizAlumno[0]); $i++) {
		echo '<br />';
		$basico += $MatrizAlumno[0][$i];
		echo '<br />';
	}
	echo '<br />';

	//Calcular Alumnos por nivel Intermedio
	$inter = 0;
	for ($i = 0; $i < count($MatrizAlumno[0]); $i++) {
		echo '<br />';
		$inter += $MatrizAlumno[1][$i];
		echo '<br />';
	}
	echo '<br />';

	//Calcular Alumnos por nivel perfeccionado
	$perfe = 0;
	for ($i = 0; $i < count($MatrizAlumno[0]); $i++) {
		echo '<br />';
		$perfe += $MatrizAlumno[2][$i];
		echo '<br />';
	}
	echo '<br />';


	?>
</body>

</html>