<?php

class Articulo
{
    public static $id = 0;
    private $nombre;

    function __construct($nombre) {
        self::$id++;
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
        self::$id++;
    }
}

$articulo1 = new Articulo('Logitech G Pro');
echo 'ID: ' . Articulo::$id . '<br>';
echo 'Nombre: ' . $articulo1->nombre . '<br>';

$articuloClon1 = clone($articulo1);
echo 'ID: ' . Articulo::$id . '<br>';
echo 'Nombre: ' . $articuloClon1->nombre . '<br>';

$articulo2 = new Articulo('Corsair K70');
echo 'ID: ' . Articulo::$id . '<br>';
echo 'Nombre: ' . $articulo2->nombre . '<br>';

$articuloClon2 = clone($articulo2);
echo 'ID: ' . Articulo::$id . '<br>';
echo 'Nombre: ' . $articuloClon2->nombre . '<br>';

$articuloClon22 = clone($articulo2);
echo 'ID: ' . Articulo::$id . '<br>';
echo 'Nombre: ' . $articuloClon22->nombre . '<br>';