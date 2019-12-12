<?php

$cuentaBancaria = '00491500051234567892';
if (validarCodigoCuenta($cuentaBancaria)) {
    echo 'La cuenta bancaria ' . $cuentaBancaria . ' es válida';
} else {
    echo 'La cuenta bancaria no es válida';
}

function validarCodigoCuenta($cuentaBancaria)
{
    $pesosEntidadSucursal = array(4, 8, 5, 10, 9, 7, 3, 6);
    $pesosNumeroCuenta = array(1, 2, 4, 8, 5, 10, 9, 7, 3, 6);
    if (strlen($cuentaBancaria) === 20) {
        $bloqueA = substr($cuentaBancaria, 0, 8);
        $bloqueB = substr($cuentaBancaria, 8, 1);
        $bloqueC = substr($cuentaBancaria, 9, 1);
        $bloqueD = substr($cuentaBancaria, 10, 10);
        if (calcularDigitoControl($bloqueA, $pesosEntidadSucursal) != $bloqueB) {
            return false;
        }
        if (calcularDigitoControl($bloqueD, $pesosNumeroCuenta) != $bloqueC) {
            return false;
        }
        return true;
    } else {
        return false;
    }
}

function calcularDigitoControl($bloqueNumeros, $pesos)
{
    $sumaPonderada = sumaPonderada($bloqueNumeros, $pesos);
    $sumaPonderadaResto11 = $sumaPonderada % 11;
    $resultadoRestoPonderado = 11 - $sumaPonderadaResto11;
    if ($resultadoRestoPonderado === 11) {
        return 0;
    } else if ($resultadoRestoPonderado === 10) {
        return 1;
    } else {
        return $resultadoRestoPonderado;
    }
}

function sumaPonderada($numeros, $pesos)
{
    $suma = 0;
    foreach ($pesos as $index => $pesoNumero) {
        $suma += ($pesoNumero * $numeros[$index]);
    }
    return $suma;
}
