<?php

$matriz = [8][8];

for ($i = 0; $i <= 8; $i++) {
    $matriz[$i] = rand(0,2);
    for ($j = 0; $j <= 8; $j++) {
        $matriz[$j] = rand(0,2);
    }
}

