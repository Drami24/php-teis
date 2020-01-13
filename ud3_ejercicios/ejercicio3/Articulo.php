<?php

class Articulo {
    public $id;
    public $nombre;

    function __construct($nombre) {
        $this->nombre = $nombre;
        $valor = $this->$id++;
        $this->id = $valor;
    }
}

$articulo1 = new Articulo('hola');
$articulo2 = new Articulo('hola');
$articulo3 = new Articulo('hola');

echo $articulo1->nombre;
echo $articulo1->id;

echo $articulo3->nombre;
echo $articulo3->id;
