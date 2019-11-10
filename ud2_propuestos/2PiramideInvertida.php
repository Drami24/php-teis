<?php

// Dificultad: Fácil 3/10
$simboloPiramide = '*';
$filasPiramide = 9;

function crearBasePiramide($simboloPiramide, $filasPiramide) {
    for ($i = 0; $i < $filasPiramide; ++$i) {
        $piramide .= $simboloPiramide;
    }
    return $piramide;
}

function piramideDescendente($simboloPiramide, $filasPiramide) {
    $piramide = crearBasePiramide($simboloPiramide, $filasPiramide);
    for ($i = 0; $i < $filasPiramide; ++$i) {
        echo $piramide;
        $piramide = substr($piramide, 1);
        echo '<br/>';
    }
}

function piramideCentrada($simboloPiramide, $filasPiramide) {
    $asteriscos = crearBasePiramide($simboloPiramide, $filasPiramide + 1);
    $espacios = '';
    for ($i = 0; $i < $filasPiramide; ++$i) {
        $asteriscos = substr($asteriscos, 1);
        $espacios .= '&nbsp;';
        echo $espacios . $asteriscos . '<br/>';
    }
}

echo '<h1>2. Pirámides Invertidas</h1>';
echo '<h2>Pirámide descendente</h2>';
piramideDescendente($simboloPiramide, $filasPiramide);
echo '<h2>Piramide centrada</h2>';
piramideCentrada($simboloPiramide, $filasPiramide);
echo '<h2>Bonus, pirámide personalizada</h2>';
piramideCentrada('@', 19);