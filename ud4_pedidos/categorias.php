<?php
    require_once 'sesion.php';
    require_once 'bd.php';
    comprobarSesion();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
<?php require 'cabecera.php';?>
<h1>Lista de categorías</h1>
<?php
    $categorias = obtenerCategorias();
    if ($categorias === FALSE) {
        echo '<p>No se han encontrado categorias</p>';
        echo '<p>Necesitas añadir categorias en la base de datos.</p>';
    } else {
        echo '<ul>';
        foreach ($categorias as $categoria) {
            $url = "productos.php?categoria=$categoria->codigo";
            echo "<li><a href='$url'>$categoria->nombre</a></li>";
        }
        echo '</ul>';
    }
?>
</body>
</html>