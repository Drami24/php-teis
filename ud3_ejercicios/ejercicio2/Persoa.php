<?php

class Persoa
{
    private $nome;
    private $dataNacemento;
    private $sexo;

    function __construct($nome, $dataNacemento, $sexo)
    {
        $this->nome = $nome;
        $this->dataNacemento = $dataNacemento;
        $this->sexo = $sexo;
    }

    public function __set($atributo, $valor)
    {
        if (property_exists(__CLASS__, $atributo)) {
            $this->$atributo = $valor;
        } else {
            echo "Non existe o atributo $atributo.";
        }
    }
    
    public function __get($atributo)
    {
        if (property_exists(__CLASS__, $atributo)) {
            return $this->$atributo;
        }
        return NULL;
    }
}
$persona1 = new Persoa("Sara", "Plaza", "Ferreiro");
echo $persona1->NIF;
