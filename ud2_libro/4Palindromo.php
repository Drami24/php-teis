<?php

$texto = "abcba";

function esPalindromo($texto) {
    if(strrev($texto) == $texto) {
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