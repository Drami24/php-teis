<?php

require_once 'sesion.php';
comprobarSesion();
$codigo = $_POST['codigo'];
$unidades = $_POST['unidades'];
if(isset($_SESSION['carrito'][$codigo])) {
    $_SESSION['carrito'][$codigo] -= $unidades;
    if($_SESSION['carrito'][$codigo] === 0) {
        unset($_SESSION['carrito'][$codigo]);
    }
}
header('Location: carrito.php');