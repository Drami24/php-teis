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

    public function mostrarPersoa($persoa) {
        echo 'Nome: ' . $persoa->nome . '<br>';
        echo 'Fecha de nacemento: ' . $persoa->dataNacemento->format("Y-m-d") . '<br>';
        echo 'Sexo: ' . $persoa->mostrarSexo($persoa) . '<br><br>';
    }

    public function mostrarSexo($persoa) {
        if ($persoa->sexo == 'H') {
            return 'Hombre';
        } else if ($persoa->sexo == 'M') {
            return 'Muller';
        } else {
            return 'Descoñecido';
        }
    }

    public function diasVivo($dataNacemento) {
        $fechaActual = new DateTime("now");
        $diasVivo = $fechaActual->diff($dataNacemento);
        return $diasVivo->format("%Y anos, %M meses, %d dias, un total de %a días");
    }

    public function mostrarMensaxe($persoa) {
        echo $persoa->getNome() . ' ten ' . $persoa->diasVivo($persoa->getDataNacemento()) . '<br>';
        echo 'O seu sexo é: ' . $persoa->mostrarSexo($persoa) . '<br><br>';
    }

}

$persoa1 = new Persoa('Sara', new DateTime("1994-09-21"), 'M');
$persoa2 = new Persoa('Damián', new DateTime("1993-01-24"));
$persoa3 = new Persoa('Jose Ramón', new DateTime("1994-10-16"), 'Otro');

$persoa1->mostrarPersoa($persoa1);
$persoa2->mostrarPersoa($persoa2);
$persoa3->mostrarPersoa($persoa3);

$persoa1->mostrarMensaxe($persoa1);
$persoa2->mostrarMensaxe($persoa2);
$persoa3->mostrarMensaxe($persoa3);