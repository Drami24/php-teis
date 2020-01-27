<?php

spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

$suma = new Suma(4,4);
$resta = new Resta(5,3);
$multiplicacion  = new Multiplicacion(3,3);

echo $suma->calcular() . '<br>';
echo $resta->calcular() . '<br>';
echo $multiplicacion->calcular() . '<br>';
