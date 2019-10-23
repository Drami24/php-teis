<?php

$texto = 'luz azul';

function esPalindromo($texto) {
    $texto = str_replace(' ', '', $texto);
    $textoInvertido = strrev(str_replace(' ', '', $texto));
    echo $textoInvertido . '<br/>'; 
    if(strrev($textoInvertido) == $texto) {
        return true;
    } else {
        return false;
    }
}

function mostrarPalindromo($texto) {
    if (esPalindromo($texto) == true) {
        echo $texto . ' es palíndromo.';
    } else {
        echo $texto . ' NO es palíndromo';
    }
}

mostrarPalindromo($texto);