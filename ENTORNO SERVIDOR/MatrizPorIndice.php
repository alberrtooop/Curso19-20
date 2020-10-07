<!DOCTYPE html>
<html>
<head>
	<title>
		<style type="text/css">
            table {
                border: 1px solid;
            }
            .color{
                background-color: #6db499;
            }
        </style>
	</title>
</head>
<body>
	<?php 
	$MatrizAlumno = array(array(1,14,8,3),array(6,19,7,2),array(3,13,4,1));


	echo '<table>';
	foreach ( $MatrizAlumno as $Array ) {
       echo '<tr>';
        foreach ( $Array as $Elemento ) {
                echo '<td>'.$Elemento.'</td>';
        }
        echo '</tr>';
	}
	echo '</table>';

	//Calcular los alumnos que hay en ingles
	$cuenta=0;
	for ($i=0; $i < sizeof($MatrizAlumno); $i++) { 
		for ($j=0; $j < ((count($MatrizAlumno,1)/count($MatrizAlumno,0))-1); $j++) { 
			
			echo "</br>";
			echo $MatrizAlumno[$i][0]; 
		
			echo "</br>";
		}
	}

	for ($capa = 0; $capa < count($MatrizAlumno, 0); $capa++) {
	  echo 'Capa: ' . $capa . '<br />';
	  for ($fil = 0; $fil < count($MatrizAlumno[$capa], 0); $fil++) {
	  		$mat = 0;
	      	$mat = $MatrizAlumno[0][0];
	      	echo $mat;
	    }
	    echo '<br />';  
	}

	$mat = $MatrizAlumno[0][0];
	      	echo $mat;
	echo "El total de alumno de ingles son: ". $cuenta;

	?>
</body>
</html>