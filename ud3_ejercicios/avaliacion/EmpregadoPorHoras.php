<?php

include_once('InterfazCompararHoras.php');

class EmpregadoPorHoras extends Empregado implements CompararHoras
{
    private $horasMes;
    private $precioHora;
    
    
    public function __construct($nome, $apelidos, $NSS, $precioHora = 25, $horasMes)
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
        return round($this->horasMes * $this->precioHora, 2);
    }

    function incrementarSalario($nuevoPrecioHora)
    {
        $this->precioHora = $nuevoPrecioHora;
    }

    function compararHoras(EmpregadoPorHoras $empregado) 
    {
        $horasEmpregadoActual = $this->horasMes;
        $horasEmpregadoAComparar = $empregado->horasMes;
        if ($horasEmpregadoActual < $horasEmpregadoAComparar) {
            $horas = $horasEmpregadoAComparar - $horasEmpregadoActual;
            echo $this->nomeCompleto() . ' traballou ' . $horas . ' horas menos que ' . $empregado->nomeCompleto();
        } else if ($horasEmpregadoActual > $horasEmpregadoAComparar){
            $horas = $horasEmpregadoActual - $horasEmpregadoAComparar;
            echo $this->nomeCompleto() . ' traballou ' . $horas . ' horas máis que ' . $empregado->nomeCompleto();
        } else if ($horasEmpregadoActual == $horasEmpregadoAComparar) {
            echo $this->nomeCompleto() . ' traballou as mesmas horas que ' . $empregado->nomeCompleto();
        }
    }
}
