<?php

$texto1 = 'cascanueces';
$texto2 = 'cacaderia';

function compararPalabras($texto1, $texto2) {
    $limite1 = strlen($texto1);
    $limite2 = strlen($texto2);
    for ($i = 0; ($i < $limite1) && ($i < $limite2); $i++) {
        if ($texto1[$i] != $texto2[$i]) {
            echo 'Diferencia en la posición ' . ($i + 1). '<br>';
            echo  '"' . $texto1[$i] . '"' . ' vs '. '"' . $texto2[$i] . '"<br>';
        } else {
            echo 'no';
        }
    }
}

compararPalabras($texto1, $texto2);