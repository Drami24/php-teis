<?php
require_once 'sesiones.php';
if(!comprobarSesion()) return;
$codigo = $_POST['codigo'];
$unidades = (int) $_POST['unidades'];
if (isset($_SESSION['carrito'][$codigo])) {
    $_SESSION['carrito'][$codigo] += $unidades;
} else {
    $_SESSION['carrito'][$codigo] = $unidades;
}
