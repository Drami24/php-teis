<?php

$simboloPiramide = '*';
$filasPiramide = 9;

echo '<h1>1. Pirámides</h1>';
echo '<h2>Pirámide ascendente</h2>';
function piramideAscendente($simboloPiramide, $filasPiramide) {
    $piramide = $simboloPiramide;
    for ($i = 0; $i < $filasPiramide; ++$i) {
        echo $piramide;
        $piramide .= $simboloPiramide;
        echo '<br/>';
    }
}
piramideAscendente($simboloPiramide, $filasPiramide);

echo '<h2>Pirámide descentrada</h2>';
function piramideDescentrada($simboloPiramide, $filasPiramide) {
    $asteriscos = $simboloPiramide;
    for ($i = 0; $i < $filasPiramide; ++$i) {
        $asteriscos = str_repeat('*', $i * 2 + 1); {
        $espacios = str_repeat('&nbsp;', 9 - $i);
        echo $espacios . $asteriscos . '<br/>';
        }
    }
}
piramideDescentrada($simboloPiramide, $filasPiramide);

echo '<h2>Pirámide centrada</h2>';
function piramideCentrada($simboloPiramide, $filasPiramide) {
    $asteriscos = $simboloPiramide;
    for ($i = 0; $i < $filasPiramide; ++$i) {
        $asteriscos = str_repeat('*', $i * 2 + 1); {
        $espacios = str_repeat('_', 9 - $i);
        echo $espacios . $asteriscos . '<br/>';
        }
    }
}
piramideCentrada($simboloPiramide, $filasPiramide);