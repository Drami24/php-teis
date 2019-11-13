<?php

$numero = "000327023.24";
if (is_numeric($numero)){
    echo "Sin quitar: $numero <br>";
    echo "Final: " . ltrim($numero, '0');
} else {
    echo 'El texto no es un numero';
}