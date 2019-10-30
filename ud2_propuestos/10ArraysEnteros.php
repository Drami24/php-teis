<?php

$numeros = generarNumerosAleatorios(0, 100, 20);
$cuadrados = generarArrayExponente($numeros, 2);
$cubos = generarArrayExponente($numeros, 3);


function generarNumerosAleatorios($minimo, $maximo, $cantidadDeNumeros){
    $arrayNumerosAleatorios = array();
    for ($i = 0; $i < $cantidadDeNumeros; $i++){
        array_push($arrayNumerosAleatorios, rand($minimo, $maximo));
    }
    return $arrayNumerosAleatorios;
}

function generarArrayExponente($arrayEntrada, $exponente){
    $arrayCuadrados = array();
    foreach($arrayEntrada as $numero){
        array_push($arrayCuadrados, pow($numero, $exponente));
    }
    return $arrayCuadrados;
}

function pintarArraysFila($numeros, $cuadrados, $cubos){
    for ($i = 0; $i < sizeof($numeros); $i++){
        echo "<tr> <td>" . $numeros[$i] . "</td>" . "<td>" . $cuadrados[$i] . "</td>" . "<td>" . $cubos[$i] . "</td> </tr>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        table, td {
            border: 1px solid black;
        }
        td {
            padding-right: 10px;
            padding-left: 10px;
        }
        th {
            padding-right: 10px;
            padding-left: 10px;
        }
    </style>
</head>
<body>
    <table>
        <body>
        <tr>
            <th>Numeros</th>
            <th>Cuadrados</th>
            <th>Cubos</th>
        </tr>
        <?php pintarArraysFila($numeros, $cuadrados, $cubos) ?>
        </body>
    </table>
</body>
</html>

