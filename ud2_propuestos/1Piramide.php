<?php

/* Dificultad: Fácil 3/10
La dificultad está puntuada por la complejidad y el tiempo dedicado a cada uno de los ejercicios
El ejercicio está planteado para poder cambiar el símbolo de la pirámide o el número de filas rápidamente.*/
$simboloPiramide = '*';
$filasPiramide = 9;

function piramideAscendente($simboloPiramide, $filasPiramide) {
    $piramide = $simboloPiramide;
    for ($i = 0; $i < $filasPiramide; ++$i) {
        echo $piramide;
        $piramide .= $simboloPiramide;
        echo '<br/>';
    }
}

function piramideDescentrada($simboloPiramide, $filasPiramide) {
    for ($i = 0; $i < $filasPiramide; ++$i) {
        $asteriscos = str_repeat($simboloPiramide, $i * 2 + 1); 
        $espacios = str_repeat('&nbsp;', $filasPiramide - $i);
        echo $espacios . $asteriscos . '<br/>';
    }
}

function piramideCentrada($simboloPiramide, $filasPiramide) {
    for ($i = 0; $i < $filasPiramide; ++$i) {
        $asteriscos = str_repeat($simboloPiramide, $i * 2 + 1);
        $espacios = str_repeat('_', $filasPiramide - $i);
        echo $espacios . $asteriscos . $espacios . '<br/>';
    }
}

echo '<h1>1. Pirámides</h1>';
echo '<h2>Pirámide ascendente</h2>';
piramideAscendente($simboloPiramide, $filasPiramide);
echo '<h2>Pirámide descentrada</h2>';
piramideDescentrada($simboloPiramide, $filasPiramide);
echo '<h2>Pirámide centrada</h2>';
piramideCentrada($simboloPiramide, $filasPiramide);
echo '<h2>Bonus, pirámide personalizada</h2>';
piramideCentrada('+', 25);