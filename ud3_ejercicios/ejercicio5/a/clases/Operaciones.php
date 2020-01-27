<?php

spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

$suma = new Suma();
$resta = new Resta();
$multiplicacion  = new Multiplicacion();

echo $suma->calcular(3,4) . '<br>';
echo $resta->calcular(10,4) . '<br>';
echo $multiplicacion->calcular(3,4) . '<br>';
