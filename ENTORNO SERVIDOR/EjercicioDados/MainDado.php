<?php
include 'Dados.php';

$dado1 = new Dado(20, -3);

for ($i = 1; $i <= 12; $i++) {
    echo "Tirada { $i } -> " . $dado1->tirarDado() . " <br>";
}
