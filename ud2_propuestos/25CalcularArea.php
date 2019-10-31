<?php

if (isset($_POST['area'])){
    $area = $_POST['area'];
}

if (isset($area)){
    switch ($area){
        case 'circulo':
            $radio = $_POST['radio'];
            if ($radio && validarNumero($radio)) {
                echo 'El área del circulo es ' . calcularAreaCirculo($radio);
            } else {
                echo 'No has introducido un número válido';
            }
        break;
        case 'triangulo':
            $base = $_POST['base'];
            $altura = $_POST['altura'];
            if ($base && validarNumero($base) && $altura && validarNumero($altura)) {
                echo 'El área del triángulo es ' . calcularAreaTriangulo($base, $altura);
            } else {
                echo 'No has introducido un número válido';
            }
        break;
        case 'cuadrado':
            $base = $_POST['base'];
            $altura = $_POST['altura'];
            if ($base && validarNumero($base) && $altura && validarNumero($altura)) {
                echo 'El área del triángulo es ' . calcularAreaTriangulo($base, $altura);
            } else {
                echo 'No has introducido un número válido';
            }
        break;
    }
} else {
    echo 'No has seleccionado nada!';
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