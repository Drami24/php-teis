<?php

require_once 'sesion.php';
comprobarSesion();
$codigo = $_POST['codigo'];
$unidades = (int)$_POST['unidades'];
$stock = $_POST['stock'];
$stockNegativo = FALSE;
if(isset($_SESSION['carrito'][$codigo])) {
    if ($stock < ($_SESSION['carrito'][$codigo] + $unidades)) {
        $stockNegativo = TRUE;
    } else {
        $_SESSION['carrito'][$codigo] += $unidades;
    }
} else {
    $_SESSION['carrito'][$codigo] = $unidades;
}
if ($stockNegativo === TRUE) {
    header('Location: productos.php?categoria=' . $_POST['categoria'] . '&stock=true');
} else {
    header('Location: productos.php?categoria=' . $_POST['categoria']);
}
