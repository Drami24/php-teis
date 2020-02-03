<?php

class EmpregadoPorHoras extends Empregado
{
    private $horasMes;
    private $precioHora;
    
    
    public function __construct($nome, $apelidos, $NSS, $precioHora, $horasMes)
    {
        parent::__construct($nome, $apelidos, $NSS);
        $this->horasMes = $horasMes;
        $this->precioHora = $precioHora;
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

    function salarioMes()
    {

    }

    function incrementarSalario()
    {
        
    }
}