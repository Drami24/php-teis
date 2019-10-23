<?php

function ecuacionSegundoGrado($a, $b, $c) {
    $solucion1 = (-$b + sqrt(pow($b,2) - 4 * $a * $c)) / (2 * $a);
    $solucion2 = (-$b - sqrt(pow($b,2) - 4 * $a * $c)) / (2 * $a);
    if (!is_nan($solucion1) && !is_nan($solucion2)) {
        return array(round($solucion1, 2), round($solucion2, 2)) ;
    } else {
        return false;
    }
}

function solucionEcuacionSegundoGrado($a, $b, $c) {
    $soluciones = ecuacionSegundoGrado($a, $b, $c);
    if ($soluciones == !false) {
        echo 'Solución 1: ' . $soluciones[0] . '<br/>';
        echo 'Solución 2: ' . $soluciones[1] . '<br/><br/>';
    } else {
        echo 'La ecuación no tiene soluciones reales.';
    }
    
}