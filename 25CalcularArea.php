<?php

$area = $_POST['area'];

if (isset($area) && $area == 'circulo') {
    $radio = $_POST['radio'];
    if (isset($radio) && validarNumero($radio)) {
        echo 'El área del circulo es ' . calcularAreaCirculo($radio);
    } else {
        echo 'No has introducido un número válido';
    }
}

if (isset($area) && $area == 'triangulo') {
    $base = $_POST['base'];
    $altura = $_POST['altura'];
    if (isset($base) && validarNumero($base) && isset($altura) && validarNumero($altura)) {
        echo 'El área del triángulo es ' . calcularAreaTriangulo($base, $altura);
    } else {
        echo 'No has introducido un número válido';
    }
}

if (isset($area) && $area == 'cuadrado') {
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    if (isset($lado1) && validarNumero($lado1) && isset($lado2) && validarNumero($lado2)) {
        echo 'El área del cuadrado es ' . calcularAreaCuadrado($lado1, $lado2);
    } else {
        echo 'No has introducido un número válido';
    }
}

function validarNumero($numero) {
    if ($numero > 0) {
        return true;
    } else {
        return false;
    }
}

function calcularAreaCirculo($radio) {
    $area = pi() * pow($radio, 2);
    $area = round($area, 2);
    return $area;
}

function calcularAreaTriangulo($base, $altura) {
    $area = $base * $altura / 2;
    $area = round($area, 2);
    return $area;
}

function calcularAreaCuadrado($lado1, $lado2) {
    $area = $lado1 * $lado2;
    $area = round($area, 2);
    return $area;
}