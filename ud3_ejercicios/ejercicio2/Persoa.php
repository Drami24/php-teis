<?php

class Persoa 
{
    private $nome;
    private $dataNacemento;
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

    function mostrarPersoa() {
        echo 'Nome: ' . $this->nome . '<br>';
        echo 'Fecha de nacemento: ' . $this->dataNacemento->format("Y-m-d") . '<br>';
        echo 'Sexo: ' . $this->mostrarSexo() . '<br><br>';
    }

    function mostrarSexo() {
        if ($this->sexo === 'H') {
            return 'Home';
        } else if ($this->sexo === 'M') {
            return 'Muller';
        } else {
            return 'Descoñecido';
        }
    }

    function diasVivo() {
        $fechaActual = new DateTime("now");
        $diasVivo = $fechaActual->diff($this->dataNacemento);
        return $diasVivo->format("%Y anos, %M meses, %d dias, un total de %a días");
    }

    function mostrarMensaxe() {
        echo $this->nome . ' ten ' . $this->diasVivo() . '<br>';
        echo 'O seu sexo é: ' . $this->mostrarSexo() . '<br><br>';
    }
}

$persoa1 = new Persoa('Sara', new DateTime("1994-09-21"), 'M');
$persoa2 = new Persoa('Damián', new DateTime("1993-01-24"));
$persoa3 = new Persoa('Jose Ramón', new DateTime("1994-10-16"), 'Otro');

$persoa1->mostrarPersoa();
$persoa2->mostrarPersoa();
$persoa3->mostrarPersoa();

$persoa1->mostrarMensaxe();
$persoa2->mostrarMensaxe();
$persoa3->mostrarMensaxe();