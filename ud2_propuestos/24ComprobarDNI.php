<?php

function validarDNI($dni) {
    $letra = substr(strtoupper($dni), -1);
    $numeros = substr($dni, 0, -1);
    if(strlen($dni) != 9 || !ctype_digit($numeros) || !ctype_alpha($letra)) {
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
        echo 'El dni ' . strtoupper($dni) . ' NO es válido<br/>';
    } else {
        echo 'El dni ' . strtoupper($dni) . ' es válido<br/>';
    }
}

visualizarValidacionDNI('12312312A');
visualizarValidacionDNI('12312312k');