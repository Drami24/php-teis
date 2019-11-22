<?php

function generarNumeroAleatorio() {
    return rand(0,2);
}

$matriz = array();

for ($i = 0; $i < 8; $i++) {
    $matriz = [$i];
}

for ($i = 0; $i < 8; $i++) {
    echo $matriz[$i];
    echo '<br>';
}