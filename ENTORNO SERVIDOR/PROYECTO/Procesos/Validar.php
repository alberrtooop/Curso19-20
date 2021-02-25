<?php
$link = new PDO("mysql:host=localhost;dbname=usuarios", "root", "root");

$link->exec("set names utf8");

$query = "SELECT * FROM usuario WHERE Email=:Email";

/*Preparando el Statements*/

$stmt = $link->prepare($query);

/*Prerando para enviarlo a la base de datos */
$stmt->bindParam(":Email", $_POST["Email"], PDO::PARAM_STR);
$stmt->execute();

if ($stmt->rowcount() > 0) {
    echo json_encode(array('success' => 1));
} else {
    echo json_encode(array('success' => 0));
}
