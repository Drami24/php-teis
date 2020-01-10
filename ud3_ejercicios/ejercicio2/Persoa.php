<?php

class Persoa 
{
    private $nome;
    private DateTime $dataNacemento;
    private $sexo;

    function __construct($nome, $dataNacemento, $sexo = 'H')
    {
        $this->nome = $nome;
        $this->dataNacemento = $dataNacemento;
        $this->sexo = $sexo;
    }

    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function getDataNacemento() {
        return $this->dataNacemento;
    }

    function setDataNacemento($dataNacemento) {
        $this->dataNacemento = $dataNacemento;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    } 

    public function mostrarPersoa($persoa) {
        echo 'Nome: ' . $persoa->nome . '<br>';
        //echo 'Fecha de nacemento: ' . $persoa->dataNacemento . '<br>';
        echo 'Sexo: ';
        if ($persoa->sexo == 'H') {
            echo 'Hombre' . '<br>';
        } else if ($persoa->sexo == 'M') {
            echo 'Muller' . '<br>';
        } else {
            echo 'Descoñecido <br>';
        }
        echo '<br>';
    }

    public function diasVivo($persoa) {
        $fechaNacemento = new DateTime("1994-11-24");
        $fechaActual = new DateTime("now");
        //$fechaProba = $persoa->getDataNacemento;
        $diasVivo = $fechaNacemento->diff($fechaActual);

        echo $diasVivo->days . ' days ' . '<br>';
    }

}

$persoa1 = new Persoa('Sara', new DateTime("1994-11-24"), 'M');
$persoa1->mostrarPersoa($persoa1);
$persoa1->diasVivo($persoa1);

$persoa2 = new Persoa('Damián', '1993-01-24');
$persoa2->mostrarPersoa($persoa2);

$persoa3 = new Persoa('Jose Ramón', '1994-10-16', 'Otro');
$persoa3->mostrarPersoa($persoa3);