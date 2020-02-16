<?php

spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

$empleado1 = new EmpregadoAsalariado('Diego', 'Martínez García', 555501234, 24500);
$empleado2 = new EmpregadoAsalariado('Laura', 'Vilar Varela', 542187667, 22500);
$empleado3 = new EmpregadoPorHoras('Marta', 'Viñas Rodriguez', 556501232, 23, 105);
$empleado4 = new EmpregadoPorHoras('David', 'Fernández Gómez', 578845231, 18, 90);

$empleados = array();
array_push($empleados, $empleado1, $empleado2, $empleado3, $empleado4);
$empleado1->mostrarEmpregados($empleados);
echo '<br>';
$empleado3->compararHoras($empleado4);
echo '<br>';
$empleado4->compararHoras($empleado3);