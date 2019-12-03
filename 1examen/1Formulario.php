<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DNI tablas</title>
    <style type="text/css">
        * {
            font-family: 'Courier New';
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        Filas y columnas (separados por comas)
        <input type="text" name="filasColumnas">
        <input type="submit" value="Enviar">
    </form>

    <?php
    require '1Funciones.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $filas = obtenerFilasColumnas()[1];
        $columnas = obtenerFilasColumnas()[0];
        visualizarTablaDNI($filas, $columnas);
    }
    ?>

</body>
</html>