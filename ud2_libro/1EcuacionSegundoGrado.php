<?php

$a = 4;
$b = 8;
$c = 3;

$solucion1 = (-$b + sqrt(pow($b,2) - $a * $c)) / 2 * $a;
$solucion2 = (-$b - sqrt(pow($b,2) - $a * $c)) / 2 * $a;

echo $solucion1 . '<br/>';
echo $solucion2;

