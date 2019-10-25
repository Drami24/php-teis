<?php

$texto = 'Luz azul';

function esPalindromo($texto) {
    $texto = str_replace(',', ' ', $texto);
    $texto = str_replace(' ', '', $texto);
    $texto = strtolower($texto);
    $texto = quitar_tildes($texto);
    $textoInvertido = strrev($texto);
    if ($textoInvertido == $texto) {
        return true;
    } else {
        return false;
    }
}

function mostrarPalindromo($texto) {
    if (esPalindromo($texto) == true) {
        echo "<b>$texto</b> es palíndromo.<br/>";
    } else {
        echo "<b>$texto</b> NO es palíndromo<br/>";
    }
}

function quitar_tildes($cadena) {
    $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
    $permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
    $texto = str_replace($no_permitidas, $permitidas ,$cadena);
    return $texto;
}

mostrarPalindromo($texto);
mostrarPalindromo('No subas, abusón');
mostrarPalindromo('Yo dono rosas, oro no doy');
mostrarPalindromo('Adán no cede con Eva y Yavé no cede con nada');
mostrarPalindromo('O rey, o joyero');
mostrarPalindromo('Arroz a la dama da la zorra');
mostrarPalindromo('Esto no es');
mostrarPalindromo(23832);
mostrarPalindromo(2002);
mostrarPalindromo(123421);