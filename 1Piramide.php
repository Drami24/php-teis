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
        $asteriscos = str_repeat($simboloPiramide, $i * 2 + 1); 
        $espacios = str_repeat('&nbsp;', $filasPiramide - $i);
        echo $espacios . $asteriscos . '<br/>';
    }
}
piramideDescentrada($simboloPiramide, $filasPiramide);

echo '<h2>Pirámide centrada</h2>';
function piramideCentrada($simboloPiramide, $filasPiramide) {
    $asteriscos = $simboloPiramide;
    for ($i = 0; $i < $filasPiramide; ++$i) {
        $asteriscos = str_repeat($simboloPiramide, $i * 2 + 1);
        $espacios = str_repeat('_', $filasPiramide - $i);
        $espacio2 = str_repeat('_', $filasPiramide - $i);
        echo $espacios . $asteriscos . $espacio2 . '<br/>';
    }
}
piramideCentrada($simboloPiramide, $filasPiramide);

echo '<h2>Bonus pirámide personalizada</h2>';
piramideCentrada('x', 25);