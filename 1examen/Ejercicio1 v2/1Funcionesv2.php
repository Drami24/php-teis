<?php

function obtenerFilasColumnas()
{
    $filasColumnas = $_POST['filasColumnas'];
    $arrayFilasColumnas = explode(',', str_replace(' ', '', $filasColumnas));
    $tamanhoArray = count($arrayFilasColumnas);
    if (empty($filasColumnas)) {
        return array(8, 8);
    }
    if ($tamanhoArray == 1 && ctype_digit($arrayFilasColumnas[0])) {
        return array($arrayFilasColumnas[0], $arrayFilasColumnas[0]);
    } else if (
        $tamanhoArray == 2 &&
        ctype_digit($arrayFilasColumnas[0]) &&
        ctype_digit($arrayFilasColumnas[1])
    ) {
        return array($arrayFilasColumnas[0], $arrayFilasColumnas[1]);
    } else {
        return false;
    }
}

function generarDNIAleatorio()
{
    $numerosDNI = '';
    for ($i = 0; $i < 9; ++$i) {
        $numeroAleatorio = rand(0, 9);
        $numerosDNI .= $numeroAleatorio;
    }
    $letra = 'TRWAGMYFPDXBNJZSQVHLCKE'[$numerosDNI % 23];
    return $numerosDNI . $letra;
}

function obtenerArrayDNI($filas, $columnas)
{
    for ($i = 0; $i < $filas; ++$i) {
        for ($j = 0; $j < $columnas; ++$j) {
            $arrayDNI[$i][$j] = generarDNIAleatorio();
        }
    }
    return $arrayDNI;
}

function criterioDNI($dni)
{
    $letra = substr($dni, -1);
    if ($letra == 'A' || $letra == 'E') {
        return true;
    } else {
        return false;
    }
}

function cambiarDNIAfectado($dni)
{
    if (criterioDNI($dni) == true) {
        $numeros = substr($dni, 0, -1);
        $arrayNumeros = array();
        for ($i = 0; $i < strlen($numeros); ++$i) {
            $numero = $numeros[$i];
            array_push($arrayNumeros, $numero);
        }
        $numeroMaximo = max($arrayNumeros);
        $numeros = '';
        for ($i = 0; $i < count($arrayNumeros); ++$i) {
            $numeros .= $numeroMaximo;
        }
        $letra = 'TRWAGMYFPDXBNJZSQVHLCKE'[$numeros % 23];
        return $numeros . $letra;
    } else {
        return $dni;
    }
}
