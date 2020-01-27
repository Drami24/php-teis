<?php

abstract class Calculo
{
    private $operando1;
    private $operando2;
    private $resultado;
    
    function setOperando1($operando1) {
        $this->operando1 = $operando1;
    }
    
    function setOperando2($operando2) {
        $this->operando2 = $operando2;
    }
    
    function getResultado() {
        return $this->resultado;
    }
    
    abstract protected function calcular($operando1, $operando2);
}
