<?php

$numeros = $_POST['numeros'];
$prueba = $numeros;
$pos1 = 0;
$pos2 = 1;
$suma;
$resultado = array(0,1);
$numeros -= 2;
$numeros /= 2;
$numeroSiguiente;


for ($i=0; $i < $numeros; $i++) {
        $pos1 += $pos2;
        $pos2 += $pos1;
        array_push($resultado, $pos1);
        array_push($resultado, $pos2);
}


function siguienteNumero($numeroAnterior) {
    $numeroSiguiente += $numeroAnterior; 
}
/*
for ($i =0; $i < $prueba; $i++) {
    $pos1 = siguienteNumero($pos2);
    $pos2 = siguienteNumero($pos1);
    $numeroSiguiente = $pos1;
    array_push($resultado, $pos1);
    array_push($resultado, $pos2);
}*/


echo "<h2>Fibonacci</h2>";
foreach ($resultado as $numero) {
    echo "$numero <br>";
}

// 0 1 1 2 3 5 8 13

/*
pos1 = 2
pos2 = 3    
suma = 5    
pos1 = suma         pos1 = 5
pos2 += pos1        pos2 = 8
*/

