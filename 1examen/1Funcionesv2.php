<?php

function obtenerFilasColumnas() {
    $filasColumnas = $_POST['filasColumnas'];
    $arrayFilasColumnas = explode(',', $filasColumnas);
    $tamanhoArray = count($arrayFilasColumnas);
    if (empty($filasColumnas)) {
        return array(8, 8);
    }
    if ( $tamanhoArray == 1 ) {
        return array($arrayFilasColumnas[0], $arrayFilasColumnas[0]);
    } else if ( $tamanhoArray >= 1 && $tamanhoArray < 3 ) {
        return array($arrayFilasColumnas[0], $arrayFilasColumnas[1]);
    } else {
        return false;
    }
}

function generarDNIAleatorio() {
    $numerosDNI = '';
    for ($i = 0; $i < 9; ++$i) {
        $numeroAleatorio = rand(0,9);
        $numerosDNI .= $numeroAleatorio;
    }
    $letra = 'TRWAGMYFPDXBNJZSQVHLCKE'[$numerosDNI%23];
    return $numerosDNI . $letra;
}

function obtenerArrayDNI($filas, $columnas) {
    for ($i = 0; $i < $filas; ++$i) {
        for ($j = 0; $j < $columnas; ++$j) {
            $arrayDNI[$i][$j] = generarDNIAleatorio();
        }
    }
    return $arrayDNI;
}

function criterioDNI($dni) {
    $letra = substr($dni, -1);
    if ($letra == 'A' || $letra == 'E') {
        return true;
    } else {
        return false;
    }
}
