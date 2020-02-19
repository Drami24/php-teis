<?php

require_once 'sesion.php';
require_once 'Productos.php';

comprobarSesion();
$codigo = $_POST['codigoMas'];
var_dump($_POST['codigoM']);
$unidades = (int)$_POST['unidades'];
if(isset($_SESSION['carrito']['codigo'])) {
    $_SESSION['carrito'][$codigo] += $unidades;
} else {
    $_SESSION['carrito'][$codigo] = $unidades;
}
header('Location: Carrito.php');