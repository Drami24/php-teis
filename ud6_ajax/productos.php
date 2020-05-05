<?php

require_once 'bd.php';
require_once 'sesiones.php';
if (!comprobarSesion()) return;
$productos  = obtenerProductosCategoria($_GET['categoria']);
$productos = json_encode($productos);
echo $productos;
