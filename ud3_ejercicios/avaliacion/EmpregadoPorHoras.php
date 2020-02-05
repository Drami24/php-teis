<?php

include_once('InterfazCompararHoras.php');

class EmpregadoPorHoras extends Empregado implements CompararHoras
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
        return round($this->horasMes*$this->precioHora, 2);
    }

    function incrementarSalario($nuevoPrecioHora)
    {
        $this->precioHora = $nuevoPrecioHora;
    }

    function compararHoras($empleado) {
        $horas1 = $this->horasMes;
        echo $horas1 . ' horas de <br>';
        $this->nomeCompleto();
        echo '<br><br>';
        $horas2 = $empleado->horasMes;
        echo $horas2 . ' horas de <br>';
        $empleado->nomeCompleto();
        echo '<br><br>';
        if ($horas1 < $horas2) {
            $horasMenos = $horas2 - $horas1;
            $this->nomeCompleto();
            echo ' traballou ' . $horasMenos . ' horas menos que ';
            $empleado->nomeCompleto();
        } else {
            $horasMenos = $horas1 - $horas2;
            $empleado->nomeCompleto();
            echo ' traballou ' . $horasMenos . ' horas menos que ';
            $this->nomeCompleto();
        }
    }
}