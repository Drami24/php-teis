<?php

$simboloPiramide = '*';
$filasPiramide = 9;

echo '<h1>2. Pirámides</h1>';
echo '<h2>Pirámide descendente</h2>';

function crearBasePiramide($simboloPiramide, $filasPiramide) {
    $piramide = $simboloPiramide;
    for ($i = 0; $i < $filasPiramide -1; ++$i) {
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
piramideDescendente($simboloPiramide, $filasPiramide);

echo '<h2>Piramide centrada</h2>';
function piramideCentrada($simboloPiramide, $filasPiramide) {
    $asteriscos = crearBasePiramide($simboloPiramide, $filasPiramide + 1);
    $espacios = '';
    for ($i = 0; $i < $filasPiramide; ++$i) {
        $asteriscos = substr($asteriscos, 1);
        $espacios .= '&nbsp;';
        echo $espacios . $asteriscos . '<br/>';
    }
}
piramideCentrada($simboloPiramide, $filasPiramide);

echo '<h2>Bonus, pirámide personalizada</h2>';
piramideCentrada('@', 19);