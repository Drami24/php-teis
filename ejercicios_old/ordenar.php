<?php

$numeros = $_POST['numeros'];
$numeros = explode(",", $numeros);
$numerosOrdenados = $numeros;
sort($numerosOrdenados);

if (sizeof($numeros) == 10 ) {
    $numerosOrdenados = $numeros;
    sort($numerosOrdenados);
    $numeroMinimo = $numerosOrdenados[0];
    $numeroMaximo = $numerosOrdenados[9];
    echo "minimo: $numeroMinimo <br>";
    echo "maximo: $numeroMaximo <br><br>";


    for ($i=0; $i < sizeof($numeros); $i++) {
        echo " " . $numeros[$i];
        if ($numeros[$i] == $numeroMinimo) {
            echo "min";
        } 
        if ($numeros[$i] == $numeroMaximo) {
            echo "max";
        }
    }
} else {
    echo "No has introducido 10 números";
}