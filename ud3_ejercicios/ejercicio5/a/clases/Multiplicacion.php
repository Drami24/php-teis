<?php

class Multiplicacion extends Calculo
{
    function calcular($operando1, $operando2) {
        $this->setOperando1($operando1);
        $this->setOperando2($operando2);
        return $operando1 * $operando2;
    }
}