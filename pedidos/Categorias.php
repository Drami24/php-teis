<?php
    require('Sesion.php');
    require_once('bd.php');
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
<?php require('Cabecera.php');?>
<h1>Lista de categorías</h1>
<?php
    $categorias = obtenerCategorias();
    echo '<ul>';
    foreach ($categorias as $categoria) {
        $url = 'Productos.php?categoria=' . $categoria->codigo;
        echo '<li><a href="' . $url . '">' . $categoria->nombre . "</a></li>";
    }
    echo '</ul>';
?>

</body>
</html>