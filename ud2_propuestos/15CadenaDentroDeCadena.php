<?php

$texto = 'A galiña azul salta sobre o seu niño';
echo $texto . '<br>';
$busqueda = 'salta';
echo 'Buscamos a palabra ' . $busqueda . '<br><br>'; 
$valor = strpos($texto, $busqueda);

if ($valor) {
    echo 'Se encontró la palabra <b>' . $busqueda . '</b> en el texto';
} else {
    echo 'NO se encontró ninguna coincidencia';
}