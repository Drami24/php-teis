<?php

$numeros = $_POST['numeros'];
$arrayNumeros = explode(' ', $numeros);

sort($arrayNumeros);
echo 'Numeros ordenados de menor a mayor<br>';
foreach ($arrayNumeros as $numero) {
    echo $numero . ' ';
}
echo '<br>';

rsort($arrayNumeros);
echo 'Numeros ordenados de mayor a menor<br>';
foreach ($arrayNumeros as $numero) {
    echo $numero . ' ';
}