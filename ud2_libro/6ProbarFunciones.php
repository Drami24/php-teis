<?php

$nombre = 'María';
$apellido;
$lugar = null;
echo '<h2>Funciones de variables</h2>';
if (isset($nombre)) {
    echo '1 La variable está inicializada y no es NULL<br/>';
} else {
    echo '1 La variable <b>NO</b> está inicializada<br/>';
}

if (isset($apellido)) {
    echo '2 La variable está inicializada y no es NULL<br/>';
} else {
    echo '2 La variable <b>NO</b> está inicializada<br/>';
}

if (is_null($nombre)) {
    echo '3 La variable es NULL<br/>';
} else {
    echo '3 La variable <b>NO</b> es NULL<br/>';
}

if (is_null($lugar)) {
    echo '4 La variable es NULL<br/>';
} else {
    echo '4 La variable <b>NO</b> es NULL<br/>';
}

if (empty($nombre)) {
    echo '5 La variable <b>NO</b> está inicializada o su valor es FALSE<br/>';
} else {
    echo '5 La variable está inicializada<br/>';
}

if (empty($apellido)) {
    echo '6 La variable <b>NO</b> está inicializada o su valor es FALSE<br/><br/>';
} else {
    echo '6 La variable está inicializada<br/><br/>';
}

$numero1 = 12;
$numero2 = 24.4532;
$numeroTexto = 'cuarenta y tres';

if (is_int($numero1)) {
    echo $numero1 . ' es un entero<br>';
} else {
    echo $numero1 . ' <b>NO</b> es un entero<br>';
}

if (is_int($numero2)) {
    echo $numero2 . ' es un entero<br>';
} else {
    echo $numero2 . ' <b>NO</b> es un entero<br>';
}

if (is_int($numeroTexto)) {
    echo $numeroTexto . ' es un entero<br>';
} else {
    echo $numeroTexto . ' <b>NO</b> es un entero<br>';
}

if (is_float($numero1)) {
    echo $numero1 . ' es un float<br>';
} else {
    echo $numero1 . ' <b>NO</b> es un float<br>';
}

if (is_float($numero2)) {
    echo $numero2 . ' es un float<br>';
} else {
    echo $numero2 . ' <b>NO</b> es un float<br>';
}

if (is_float($numeroTexto)) {
    echo $numeroTexto . ' es un float<br>';
} else {
    echo $numeroTexto . ' <b>NO</b> es un float<br>';
}

if (is_bool(1)) {
    echo '1 es booleano<br>';
} else {
    echo '1 <b>NO</b> es booleano<br>';
}

if (is_bool(true)) {
    echo 'true es booleano<br>';
} else {
    echo 'true <b>NO</b> es booleano<br>';
}

if (is_array('Vigo')) {
    echo 'Vigo es un array<br>';
} {
    echo 'Vigo <b>NO</b> es un array<br>';
}

if (is_array(112)) {
    echo '112 es un array<br>';
} else {
    echo '112 <b>NO</b> es un un array<br>';
}

if (is_array(array(1,2,3,4,5))) {
    echo 'array(1, 2, 3, 4, 5) es un array<br>';
} else {
    echo 'array(1, 2, 3, 4, 5) <b>NO</b> es un array<br>';
}

echo 'convertimos 23.123 a ' . intval(23.123) . '<br>';
echo 'convertimos el entero a float ' . floatval(2) . '<br>';
$numero4 = 4;
$numero4 = strval($numero4);
echo '4 es del tipo ' . gettype($numero4) . '<br><br>';

echo '<h2>Funciones de cadenas</h2>';
$palabra = 'teclado';
echo $palabra . ' la longitud de la palabra es: ' . strlen($palabra).  '<br>';

$frutas = 'manzana, platano, pera, limón, fresa, piña';
$frutas2 = explode(",",$frutas);
foreach ($frutas2 as $fruta) {
    echo $fruta . '<br>';
}

$arrayPerifericos = array('pantalla', 'monitor', 'teclado', 'raton');
$perifericos = implode(";", $arrayPerifericos);
echo $perifericos . '<br>';

$cadena1 = "Monitor XG2401";
$cadena2 = "Monitor XG2402";
$cadena3 = "Monitor XG2401";

echo strcmp($cadena1, $cadena2) . '<br>';
echo strcmp($cadena2, $cadena1) . '<br>';
echo strcmp($cadena1, $cadena3) . '<br>';

echo strtolower('EL MICROFONO ESTA MUY ALTO') . '<br>';
echo strtoupper('buenos dias') . '<br>';

echo '<h2>Funciones de arrays</h2>';

// Por defecto los ordena por clave de menor a mayor
$arrayDeNumeros = array(3, 1, 6, 12, 4);
var_dump($arrayDeNumeros);
// Los ordena por clave de mayor a menor
krsort($arrayDeNumeros);
var_dump($arrayDeNumeros);
// Los ordena de menor a mayor
sort($arrayDeNumeros);
var_dump($arrayDeNumeros);
// Los ordena de mayor a menor
rsort($arrayDeNumeros);
var_dump($arrayDeNumeros);

$tallas = array('pequena' => 'S', 'mediana' => 'M', 'grande' => 'L');
print_r(array_values($tallas));
echo '<br>';
print_r(array_keys($tallas));
echo '<br>';


if (array_key_exists('mediana', $tallas)) {
    echo 'existe la key mediana<br>';
}

if (array_key_exists('extra grande', $tallas)) {
    echo 'existe la key extra grande<br>';
} else {
    echo 'no existe la key extra grande<br>';
}

echo 'El array de tallas tiene ' . count($tallas) . ' elementos.<br>';