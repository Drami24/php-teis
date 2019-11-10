<?php

// Dificultad: Fácil 1-10
$hora = $_POST['hora'];
if (is_numeric($hora)) {
    if ($hora >= 6 && $hora <= 11) {
        echo 'Buenos días!';
    } else if ($hora >= 12 && $hora <= 19) {
        echo 'Buenas tardes!';
    } else if ($hora >= 20 && $hora <= 23 || $hora >= 0 && $hora <= 5) {
        echo 'Buenas noches!';
    } else {
        echo 'Introduzca una hora válida: (0-23)';
    }
} else {
    echo 'No has introducido un número!';
}