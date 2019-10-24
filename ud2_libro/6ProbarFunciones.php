<?php

$nombre = 'María';
$apellido;
$lugar = null;

if (isset($nombre)) {
    echo '1 La variable está inicializada y no es NULL<br/>';
} else {
    echo '1 La variable NO está inicializada<br/>';
}

if (isset($apellido)) {
    echo '2 La variable está inicializada y no es NULL<br/>';
} else {
    echo '2 La variable NO está inicializada<br/>';
}

if (is_null($nombre)) {
    echo '3 La variable es NULL<br/>';
} else {
    echo '3 La variable NO es NULL<br/>';
}

if (is_null($lugar)) {
    echo '4 La variable es NULL<br/>';
} else {
    echo '4 La variable no es NULL<br/>';
}

if (empty($nombre)) {
    echo '5 La variable no está inicializada o su valor es FALSE<br/>';
} else {
    echo '5 La variable está inicializada<br/>';
}

if (empty($apellido)) {
    echo '6 La variable no está inicializada o su valor es FALSE<br/><br/>';
} else {
    echo '6 La variable está inicializada<br/><br/>';
}

$numero1 = 12;
$numero2 = 24.4532;
$numero3 = 0;
$numeroTexto = 'cuarenta y tres';

if (is_int($numero1)) {
    echo "$numero1 es un entero<br/>";
}

if (is_int($numero1)) {
    echo "$numero2 es un entero<br/>";
}

