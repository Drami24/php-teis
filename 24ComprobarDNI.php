<?php

function validarDNI($dni) {
    $letra = substr($dni, -1);
    $numeros = substr($dni, 0, -1);
    if(strlen($dni) != 9 || ctype_digit($numeros) == false || ctype_alpha($letra) == false) {
        return false;
    }
    if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra) {
        return true;
    } else {
        return false;
    }

}

function visualizarValidacionDNI($dni) {
    if (validarDNI($dni) == false) {
        echo 'El dni ' . $dni . ' NO es válido<br/>';
    } else {
        echo 'El dni ' . $dni . ' es válido<br/>';
    }
}


visualizarValidacionDNI('12312312A');
visualizarValidacionDNI('12312312K');