<?php

function ecuacionSegundoGrado($a, $b, $c) {
    if ($a != 0) {
        $solucion1 = (-$b + sqrt(pow($b,2) - 4 * $a * $c)) / (2 * $a);
        $solucion2 = (-$b - sqrt(pow($b,2) - 4 * $a * $c)) / (2 * $a);
        if (!is_nan($solucion1) && !is_nan($solucion2)) {
            return array(round($solucion1, 2), round($solucion2, 2)) ;
        } else {
            return false;
        }
    } else {
        return -$c / $b;
    }
}

function calcularEcuacionSegundoGrado($a, $b, $c) {
    $solucion = ecuacionSegundoGrado($a, $b, $c);
    if ($a != 0) {
        if ($solucion == !false) {
            echo 'Solución 1: ' . $solucion[0] . '<br/>';
            echo 'Solución 2: ' . $solucion[1] . '<br/><br/>';
        } else {
            echo 'La ecuación no tiene soluciones reales.<br/><br/>';
        }
    } else {
        echo 'Esta ecuación simple solo tiene una solución: ' . $solucion . '<br/><br/>';
    }
}

calcularEcuacionSegundoGrado(3,5,2);
calcularEcuacionSegundoGrado(3,3,1);
calcularEcuacionSegundoGrado(2,0,0);
calcularEcuacionSegundoGrado(2,5,2);
calcularEcuacionSegundoGrado(0,4,2);
calcularEcuacionSegundoGrado(1,3,2);