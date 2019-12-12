<?php

function obtenerFilasColumnas()
{
    $filasColumnas = $_POST['filasColumnas'];
    $arrayFilasColumnas = explode(',', str_replace(' ', '', $filasColumnas));
    if (!empty($filasColumnas)) {
        if (sizeof($arrayFilasColumnas) > 1) {
            $filas = $arrayFilasColumnas[0];
            $columnas = $arrayFilasColumnas[1];
            return array($filas, $columnas);
        } else {
            $filas = $arrayFilasColumnas[0];
            $columnas = $arrayFilasColumnas[0];
            return array($filas, $columnas);
        }
    }
    return array(8, 8);
}

function generarDNIAleatorio()
{
    $numeros = '';
    for ($i = 0; $i < 8; ++$i) {
        $numero = rand(0, 9);
        $numeros .= $numero;
    }
    $letra = 'TRWAGMYFPDXBNJZSQVHLCKE'[$numeros % 23];
    return $numeros . $letra;
}

function criterioDNI($dni)
{
    $letra = substr($dni, -1);
    $vocales = 'AE';
    for ($i = 0; $i < 2; ++$i) {
        if ($letra === $vocales[$i]) {
            return true;
        }
    }
    return false;
}

function cambiarDNIAfectado($dni)
{
    $letra = substr($dni, -1);
    $numeros = substr($dni, 0, -1);
    if (criterioDNI($dni) === true) {
        $arrayNumeros = array();
        for ($i = 0; $i < 8; ++$i) {
            array_push($arrayNumeros, $numeros[$i]);
        }
        $numeroMaximo = max($arrayNumeros);
        $nuevoNumero = '';
        for ($j = 0; $j < 8; ++$j) {
            $nuevoNumero .= $numeroMaximo;
        }
        $numeros = $nuevoNumero;
        $letra = 'TRWAGMYFPDXBNJZSQVHLCKE'[$numeros % 23];
        return $numeros . $letra;
    }
    return $dni;
}

function visualizarTablaDNI($filas, $columnas)
{
    echo '<br>';
    for ($i = 0; $i < $columnas; ++$i) {
        for ($j = 0; $j < $filas; ++$j) {
            $dni = generarDNIAleatorio();
            echo $dni . '&nbsp;&nbsp;&nbsp;&nbsp;';
            $arrayBidemensional[$i][$j] = $dni;
        }
        echo '<br>';
    }
    echo '<br><br>';
    for ($i = 0; $i < $columnas; ++$i) {
        for ($j = 0; $j < $filas; ++$j) {
            $dni = $arrayBidemensional[$i][$j];
            if (criterioDNI($dni) === true) {
                echo '<b>' . cambiarDNIAfectado($dni) . '</b>&nbsp;&nbsp;&nbsp;&nbsp;';
            } else {
                echo $dni . '&nbsp;&nbsp;&nbsp;&nbsp;';
            }
        }
        echo '<br>';
    }
}
