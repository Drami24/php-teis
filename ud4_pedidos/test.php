<?php
    require_once 'bd.php';
    $codigos = [2,3,4];
    $p = obtenerProductos2($codigos);
    var_dump($p);
    $p = obtenerProductos3($codigos);
    var_dump($p);


