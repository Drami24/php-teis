<?php

$numeros = $_POST['numeros'];
$numeros = explode(' ', $numeros);
$arrayNumeros = $numeros;
sort($arrayNumeros);
echo 'Numeros ordenados de menor a mayor<br>';
foreach ($arrayNumeros as $numero) {
    echo $numeros . '<br>';
}