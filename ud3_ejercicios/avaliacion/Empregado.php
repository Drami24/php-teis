<?php

abstract class Empregado
{
    private $nome;
    private $apelidos;
    private $NSS;

    public function __construct($nome, $apelidos, $NSS)
    {
        $this->nome = $nome;
        $this->apelidos = $apelidos;
        $this->NSS = $NSS;
    }

    public function __get($atributo)
    {
        if (property_exists(__CLASS__, $atributo)) {
            return $this->$atributo;
        }
        return "El atributo $atributo no existe";
    }

    public function __set($atributo, $valor)
    {
        if (property_exists(__CLASS__, $atributo)) {
            $this->$atributo = $valor;
        } else {
            echo "El atributo $atributo no existe";
        }
    }
    
    function nomeCompleto()
    {
        echo $this->nome . ' ' . $this->apelidos;
    }

    abstract function salarioMes();
    abstract function incrementarSalario($suplemento);
}