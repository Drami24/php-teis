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
        return $this->nome . ' ' . $this->apelidos;
    }

    function mostrarEmpregados($empregados) {
        echo 'En total temos ' . count($empregados) . ' empregados.<br><br>';
        foreach ($empregados as $empregado) {
            if ($empregado instanceof EmpregadoAsalariado) {
                echo 'O empregado ' . $empregado->nomeCompleto() . ' é un empregado asalariado que cobra ' . $empregado->salarioMes() . ' €<br>';
            } else if ($empregado instanceof EmpregadoPorHoras) {
                echo 'O empregado ' . $empregado->nomeCompleto() . ' é un empregado contratado por horas que cobra ' . $empregado->salarioMes() . ' €<br>';
            }
        }
    }

    abstract function salarioMes();
    abstract function incrementarSalario($suplemento);
}
