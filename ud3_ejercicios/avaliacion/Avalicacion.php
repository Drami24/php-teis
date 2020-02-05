<?php

spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

$empleado1 = new EmpregadoAsalariado('Diego', 'Martínez García', 555501234, 24500);
$empleado2 = new EmpregadoAsalariado('Laura', 'Vilar Varela', 542187667, 22500);
$empleado3 = new EmpregadoPorHoras('Marta', 'Viñas Rodriguez', 556501232, 26, 120);
$empleado4 = new EmpregadoPorHoras('David', 'Fernádez Gómez', 578845231, 18, 145);

$empleados = array();
array_push($empleados, $empleado1, $empleado2, $empleado3, $empleado4);

//var_dump($empleados);
/*
$empleado1->nomeCompleto();
echo '<br>Salario mes: ' . $empleado1->salarioMes() . ' euros<br>';
$empleado1->incrementarSalario(5);
echo '<br>Salario mes: ' . $empleado1->salarioMes() . ' euros<br>';
*/

/*
$empleado3->nomeCompleto();
echo '<br>Salario mes: ' . $empleado3->salarioMes() . ' euros<br>';
$empleado3->incrementarSalario(29);
echo '<br>Salario mes: ' . $empleado3->salarioMes() . ' euros<br>';
*/

$empleado3->compararHoras($empleado4);
echo '<br>';
//$empleado4->compararHoras($empleado3);