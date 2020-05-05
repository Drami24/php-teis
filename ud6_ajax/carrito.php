<?php
require_once 'sesiones.php';
require_once 'bd.php';
//if(!comprobarSesion()) return;
$_SESSION['carrito'] = ["4"=>6, "5"=>3];
$productos = obtenerProductos(array_keys($_SESSION['carrito']));
foreach ($productos as &$producto) {
    $codigo = $producto['codigo'];
    $producto['unidades'] = $_SESSION['carrito'][$codigo];
}
echo json_encode($productos, JSON_UNESCAPED_UNICODE);