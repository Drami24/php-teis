<?php

function generarNumeroAleatorio() {
    return rand(0,2);
}

for ($i = 0; $i < 8; $i++) {
    for ($j = 0; $j < 8; $j++) {
        $matriz[$i][$j] = generarNumeroAleatorio();
    }
}

for ($i = 0; $i < 8; $i++) {
    echo 'fila' . $i . '<br>';
    for ($j = 0; $j < 8; $j++) {
        echo 'posicion: ' . $matriz[$i][$j];
        //echo $matriz[$i][$j];
        echo '<br>';
    }
    echo '<br>';
}