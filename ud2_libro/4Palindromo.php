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
    if (esPalindromo($texto)) {
        echo "<b>$texto</b> es palíndromo.<br/>";
    } else {
        echo "<b>$texto</b> NO es palíndromo<br/>";
    }
}

function quitar_tildes($cadena) {
    $conversionCaracteres = array(
        'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'þ'=>'b', 'ÿ'=>'y',
        'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
        'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 
        'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'î'=>'i', 'ï'=>'i', 
        'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 
        'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'û'=>'u', 'ý'=>'y',
        'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'ù'=>'u', 'ú'=>'u',
        'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o');
    return strtr($cadena, $conversionCaracteres);
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