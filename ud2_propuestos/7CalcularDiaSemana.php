<?php

// Dificultad: fácil 1/10
$dia = $_POST['diaSemana'];

if(is_numeric($dia)) {
    switch ($dia) {
        case 1:
            echo 'Lunes';
            break;
        case 2:
            echo 'Martes';
            break;
        case 3:
            echo 'Miércoles';
            break;
        case 4:
            echo 'Jueves';
            break;
        case 5:
            echo 'Viernes';
            break;
        case 6:
            echo 'Sábado';
            break;
        case 7:
            echo 'Domingo';
            break;
        default:
            echo 'Introduzca un número válido (1-7)';
    }
} else {
    echo 'No has introducido un número';
}