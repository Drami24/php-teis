<?php
    require_once 'Sesion.php';
    require_once 'bd.php';
    comprobarSesion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
<?php
    require 'Cabecera.php';
    //$categoria = obtenerCategoria($_GET['categoria']);
    $categoria = obtenerCategoria(2);
    //var_dump($categoria);
    //$productos = obtenerProductosCategoria($_GET['categoria']);
    $productos = obtenerProductosCategoria(1);
    var_dump($productos);

?>
</body>
</html>