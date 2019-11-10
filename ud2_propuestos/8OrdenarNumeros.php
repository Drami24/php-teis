<?php

// Dificultad: Fácil 2/10
$numeros = $_POST['numeros'];
$arrayNumeros = explode(' ', $numeros);

if (validarNumeros($arrayNumeros)) {
    sort($arrayNumeros);
    echo 'Numeros ordenados de menor a mayor<br>';
    foreach ($arrayNumeros as $numero) {
        echo $numero . ' ';
    }
    echo '<br>';
    rsort($arrayNumeros);
    echo 'Numeros ordenados de mayor a menor<br>';
    foreach ($arrayNumeros as $numero) {
        echo $numero . ' ';
    }
} else {
    echo 'No has introducido números separados por espacios';
}

function validarNumeros($numeros) {
    foreach ($numeros as $numero) {
        if (!is_numeric($numero)) {
            return false;
        }
    }
    return true;
}