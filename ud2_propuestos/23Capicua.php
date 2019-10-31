<?php

$numero = 123321;

function esCapicua($numero) {
    if ($numero == strrev($numero)) {
        return true;
    } else {
        return false;
    }
}

function visualizarCapicua($numero) {
    if (esCapicua($numero)) {
        echo $numero . ' es Capicua<br/>';
    } else {
        echo $numero . ' NO es Capicua<br/>';
    }
}

function numerosCapicuaMenores($numero) {
    $total = 0;
    for ($i = 10; $i < $numero; ++$i) {
        if (esCapicua($i)) {
            $total += $i;
        } 
    }
    echo 'La suma de todos los números capicua menores a ' 
    . $numero . ' es ' . $total . '</br>';
}

visualizarCapicua($numero);
visualizarCapicua(23421);
visualizarCapicua(98789);
visualizarCapicua(6464);
echo '<br/>';
numerosCapicuaMenores(1400);
numerosCapicuaMenores(100);