<?php 

require_once('Sesion.php');
require_once('bd.php');
comprobarSesion();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compra</title>
</head>
<body>
<?php

require('Cabecera.php');
echo '<h2>Carrito de la compra</h2>';
$productos = obtenerProductos(array_keys($_SESSION['carrito']));
echo '<table>';
echo '<tr><th>Nombre</th><th>Descripcion</th><th>Peso</th><th>Unidades</th><th>Eliminar</th></tr>';
foreach($productos as $producto) {
    $codigo = $producto['codigo'];
    $nombre = $producto['nombre'];
    $descripcion = $producto['descripcion'];
    $peso = $producto['peso'];
    $unidades = $_SESSION['carrito'][$codigo];
    echo "<tr><td>$nombre</td><td>$descripcion</td><td>$peso</td><td>$unidades</td>
            <td>
                <form action='eliminar' method='POST'>
                    <input name='unidades' type='number' min='1' value='1'>
                    <input type='submit' value='Eliminar'>
                    <input name='codigo' type='hidden' value='$codigo'>
                </form>
            </td>
          </tr>";
}
echo '</table>';
?>

<hr>
<a href="procesarPedido.php">Realizar pedido</a>
</body>
</html>