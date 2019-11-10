<?php

// Dificultad: fácil 1/10
$numero = 4;
echo 'Valor de $numero antes da función: ' . $numero . '<br/>';

function sumarUn(&$numero) {
    $numero += 1;
    echo 'Dentro da función $numero é ' . $numero;
}

sumarUn($numero);
echo '<br/>Fora da función $numero é ' . $numero;