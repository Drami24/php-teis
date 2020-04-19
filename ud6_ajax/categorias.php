<?php

require_once 'bd.php';
require_once 'sesiones.php';
//if (!comprobarSesion()) return;
$categorias = obtenerCategorias();
$categorias = json_encode($categorias);
echo $categorias;
