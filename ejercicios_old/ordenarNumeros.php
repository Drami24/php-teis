<?php

$numeros = $_POST['numeros'];
$arrayNumeros = explode(",", $numeros);
sort($arrayNumeros);
var_dump($arrayNumeros);

echo "<h2> Numeros ordenados de menor a mayor</h2>";
foreach ($arrayNumeros as $numero) {
    echo "$numero <br>";
}   