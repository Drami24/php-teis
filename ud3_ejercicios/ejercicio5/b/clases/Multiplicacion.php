<?php

class Multiplicacion extends Calculo
{
    private $operando1;
    private $operando2;

    function __construct($operando1, $operando2)
    {
        $this->operando1 = $operando1;
        $this->operando2 = $operando2;
    }

    function calcular() {
        return $this->operando1 * $this->operando2;
    }
}