<?php

spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

$empleado1 = new EmpregadoAsalariado('Diego', 'Martínez García', 555501234, 26000);
$empleado2 = new EmpregadoPorHoras('Marta', 'Viñas Rodriguez', 556501232, 26, 160);

var_dump($empleado1);
var_dump($empleado2);