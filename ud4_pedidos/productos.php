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
    <title>Productos</title>
</head>
<body>
<?php
    require 'Cabecera.php';
    $categoria = obtenerCategoria($_GET['categoria']);
    $productos = obtenerProductosCategoria($_GET['categoria']);
    if($productos === FALSE) {
        echo '<p>Esta categoria no tiene productos.</p>';
        echo '<p>Necesitas añadir productos de la categoria <b>' . $categoria->nombre . '</b> en la base de datos.</p>';
    } else {
        echo '<h1>' . $categoria->nombre . '</h1>';
        echo '<p>' . $categoria->descripcion . '</p>';
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
                <form action='añadirProductoCarrito.php' method='post'>
                    <input name='unidades' type='number' min='1' value='1'>
                    <input type='submit' value='Comprar'>
                    <input name='codigo' type='hidden' value='$codigo'>
                </form>
            </td>
            </tr>";
        }
        echo '</table>';   
    }
?>
</body>
</html>