<?php

$texto = 'A galiña azul salta sobre o seu niño';
$valor = strpos($texto, 'salta');

if ($valor) {
    echo 'Se encontró una coincidencia';
} else {
    echo 'NO se encontro ninguna coincidencia';
}