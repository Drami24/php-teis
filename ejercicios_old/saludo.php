<?php

$hora = $_POST['hora'];
$saludo_dia = "Bos días";
$saludo_tarde = "Boas tardes";
$saludo_noite = "Boas noites";
switch ($hora) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
    case 20:
    case 21:
    case 22:
    case 23:
    case 24:
        echo $saludo_noite;
        break;
    case 6:
    case 7:
    case 8:
    case 9:
    case 10:
    case 11:
        echo $saludo_dia;
        break;
    case 12:
    case 13:
    case 14:
    case 15:
    case 16:
    case 17:
    case 18:
    case 19:
        echo $saludo_tarde;
        break;
    default:
        echo "Introduza unha hora válida (1-24)";   
}