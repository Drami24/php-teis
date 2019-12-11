<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio1</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Filas, columnas: <input type="text" name="filasColumnas"><br><br>
        <input type="submit" value="Consultar">
    </form>
</body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { }

?>

</html>