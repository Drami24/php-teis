<?php

$a = 7;
$b = 21;
$c = -28;

if ($a != 0) {
    $solucion1 = (-$b + sqrt(pow($b,2) - 4 * $a * $c)) / (2 * $a);
    $solucion2 = (-$b - sqrt(pow($b,2) - 4 * $a * $c)) / (2 * $a);
}

if ($a != 0) {
    if (!is_nan($solucion1) && !is_nan($solucion2)) {
        echo 'Solución 1: ' . round($solucion1, 2) . '<br/>';
        echo 'Solución 2: ' . round($solucion2, 2) . '<br/>';
    } else {
        echo 'La ecuación no tiene soluciones reales.<br/>';
    }
} else {
    echo 'Esta ecuación simple solo tiene una solución: ' . -$c / $b . '<br/>';
}