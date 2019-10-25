<?php

$limite = 5;
$arrayDeNumeros = array(1,2,3,4,5,6,7,8);


function devolverArray($arrayDeNumeros, $limite) {
    $arrayFinal = array();
    foreach ($arrayDeNumeros as $numero) {
        if ($numero < $limite) {
            array_push($arrayFinal, $numero);
        }
    }
    return $arrayFinal;
}

function mostrarArray($arrayDeNumeros, $limite) {
    $arrayAMostrar = devolverArray($arrayDeNumeros, $limite);
    if (!empty($arrayAMostrar)) {
        echo 'Los números menores que el límite son: ';
        foreach ($arrayAMostrar as $numero) {
            echo $numero . ' ';
        }
        echo '<br><br>';
    } else {
        echo 'No existe ningun número inferior al límite en el array proporcionado.<br><br>';
    }
}

mostrarArray($arrayDeNumeros, $limite);
mostrarArray(array(5,6,7,8), 3);
mostrarArray(array(11,34,5,9,194,2033), 50);