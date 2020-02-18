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
    $categoria = obtenerCategoria($_GET['categoria']);
    $productos = obtenerProductosCategoria($_GET['categoria']);
    echo '<h1>' . $categoria['nombre'] . '</h1>';
    echo '<p>' . $categoria['descripcion'] . '</p>';
    echo '<table>';
    echo '<tr><th>Nombre</th><th>Descripcion</th><th>Peso</th><th>Stock</th><th>Comprar</th><tr>';
    foreach ($productos as $producto) {
        $codigo = $producto->codigo;
        $nombre = $producto->nombre;
        $descripcion = $producto->descripcion;
        $peso = $producto->peso;
        $stock = $producto->stock;
        echo "<tr><td>$nombre</td><td>$descripcion</td><td>$peso</td><td>$stock</td>
        <td>
            <form action='añadir.php' method='POST'>
                <input name='unidades' type='number' min='1' value='1'>
                <input type='submit' value='Comprar'>
                <input name='codigo' type='hidden' value='codigo'>
            </form>
        </td>
        </tr>";
    }
    echo '</table>';   
?>
</body>
</html>