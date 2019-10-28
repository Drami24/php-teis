<?php

$numeros = $_POST['numeros'];
$arrayNumeros = explode(' ', $numeros);
$array2 = $arrayNumeros;
asort($arrayNumeros);
echo 'Numeros ordenados de menor a mayor<br>';
foreach ($arrayNumeros as $numero) {
    echo $numero . ' ';
}
echo '<br>';

rsort($array2);
echo 'Numeros ordenados de mayor a menor<br>';
foreach ($array2 as $numero) {
    echo $numero . ' ';
}