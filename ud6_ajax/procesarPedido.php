<?php
require_once 'email.php';
require_once 'bd.php';
require_once 'sesiones.php';
if (!comprobarSesion()) return;
$pedido = insertarPedido($_SESSION['carrito'], $_SESSION['usuario']->codigo);
if ($pedido === FALSE) {
    echo 'FALSE';
} else {
    $email = $_SESSION['usuario']->email;
    $configuracion = enviarEmail($_SESSION['carrito'], $pedido, $email);
    echo 'TRUE';
    $_SESSION['carrito'] = [];
}
