<?php

require_once 'Sesion.php';
// require_once 'Productos.php';

comprobarSesion();
$codigo = $_POST['codigo'];
$unidades = (int)$_POST['unidades'];
if(isset($_SESSION['carrito'][$codigo])) {
    $_SESSION['carrito'][$codigo] += $unidades;
} else {
    $_SESSION['carrito'][$codigo] = $unidades;
}
header('Location: Carrito.php');