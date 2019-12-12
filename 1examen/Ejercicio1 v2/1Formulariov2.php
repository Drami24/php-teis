<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio1</title>
    <style>
        .error {
            color: red;
        }

        .dni {
            font-family: 'Courier New';
        }
    </style>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Filas, columnas: <input type="text" name="filasColumnas"><br><br>
        <input type="submit" value="Consultar">
    </form>
</body>

<?php

require('1Funcionesv2.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<br>';
    if (obtenerFilasColumnas() == false) {
        echo '<p class="error">No se han introducido correctamente las filas y columnas</p>';
        die();
    }
    $filas = obtenerFilasColumnas()[0];
    $columnas = obtenerFilasColumnas()[1];
    $arrayDNI = obtenerArrayDNI($filas, $columnas);

    function mostrarArrayDNI($filas, $columnas, $array, $criterioBool)
    {
        for ($i = 0; $i < $filas; ++$i) {
            for ($j = 0; $j < $columnas; ++$j) {
                $dni = $array[$i][$j];
                if ($criterioBool == true) {
                    if (criterioDNI($dni) == true) {
                        $texto = '<b>' . cambiarDNIAfectado($dni) . '</b>';
                    } else {
                        $texto = $dni;
                    }
                    echo '<span class="dni">' . $texto . '</span>&nbsp;&nbsp;';
                } else {
                    echo '<span class="dni">' . $dni . '</span>&nbsp;&nbsp;';
                }
            }
            echo '<br>';
        }
        echo '<br><br>';
    }

    mostrarArrayDNI($filas, $columnas, $arrayDNI, false);
    mostrarArrayDNI($filas, $columnas, $arrayDNI, true);
}

?>

</html>