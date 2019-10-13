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
    echo 'crear' . $piramide;
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

function piramideDescentrada($simboloPiramide, $filasPiramide) {
    $piramide = crearBasePiramide($simboloPiramide, $filasPiramide);
    for ($i = 0; $i < $filasPiramide; ++$i) {
        $asteriscos = substr($piramide, 1);
        $espacios = str_repeat('')
    }
}


for ($i = 0; $i < $filasPiramide; ++$i) {
    $asteriscos = str_repeat('*', $i * 2 + 1); {
    $espacios = str_repeat('&nbsp;', 9 - $i);
    echo $espacios . $asteriscos . '<br/>';
    }
}