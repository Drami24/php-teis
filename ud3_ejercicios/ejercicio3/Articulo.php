<?php

class Articulo
{
    private $id;
    private $nombre;

    function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    function __get($atributo) {
        if (property_exists(__CLASS__, $atributo)) {
            return $this->$atributo;
        }
        return "El atributo $atributo no existe";
    }

    function __set ($atributo, $valor) {
        if (property_exists(__CLASS__, $atributo)) {
            $this->$atributo = $valor;
        } else {
            echo "El atributo $atributo no existe";
        }
    }

    function __clone() {
        $this->id += 1;
    }
}

$articulo1 = new Articulo(1, 'Logitech G Pro');
echo $articulo1->id . '<br>';
echo $articulo1->nombre . '<br>';

$articuloClon = clone($articulo1);
echo $articuloClon->id . '<br>';
echo $articuloClon->nombre . '<br>';
