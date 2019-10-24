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
    foreach ($arrayAMostrar as $numero) {
        echo $numero . '<br/>';
    }
}

mostrarArray($arrayDeNumeros, $limite);