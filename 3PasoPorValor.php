<?php

$numero = 4;
echo 'Valor de $numero antes da funcion: ' . $numero . '<br/>';

function sumarUn($numero) {
    $numero += 1;
    echo 'Dentro da función $numero é ' . $numero;
}
sumarUn($numero);

echo '<br/>Fora da función $numero é ' . $numero;