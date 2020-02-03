<?php

class EmpregadoAsalariado extends Empregado
{
    private $importeAnual;

    function __construct($nome, $apelidos, $NSS, $importeAnual)
    {
        parent::__construct($nome, $apelidos, $NSS);
        $this->importeAnual = $importeAnual;
    }

    function __get($atributo)
    {
        if (property_exists(__CLASS__, $atributo)) {
            return $this->$atributo;
        }
        return "El atributo $atributo no existe";
    }

    function __set($atributo, $valor)
    {
        if (property_exists(__CLASS__, $atributo)) {
            $this->$atributo = $valor;
        } else {
            echo "El atributo $atributo no existe";
        }
    }

    function salarioMes()
    {

    }

    function incrementarSalario()
    {
        
    }

}