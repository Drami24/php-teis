<?php

class Articulo {
    public $id;
    public $nombre;

    function __construct($nombre) {
        $this->nombre = $nombre;
        $id++;
    }
}

$articulo1 = new Articulo('hola');
$articulo2 = new Articulo('hola');

$articulo3 = new Articulo('hola');

echo $articulo1->nombre;
