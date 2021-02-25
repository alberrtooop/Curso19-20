<?php require_once 'Seguridad.php';

$pregunta = new controladorFormularios();
$pregunta->Borrar($_POST['ID']);
