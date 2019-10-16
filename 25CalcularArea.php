<?php

$area = $_POST['area'];
if (isset($area) && $area=="circulo") {
    $radio = $_POST['radio'];
    if (isset($radio) && validarNumero($radio)) {
        echo 'El área del circulo es ' . calcularAreaCirculo($radio);
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

function calcularAreaTriangulo() {

}

function calcularAreaCuadrado() {

}