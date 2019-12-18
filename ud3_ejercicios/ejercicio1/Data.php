<?php

class Data
{
    private static $calendario = "Calendario gregoriano";

    static function getCalendario()
    {
        return self::$calendario;
    }

    static function getData()
    {   
        $dia = date('l');
        $diaNumero = date('d');
        $mes = date('F');
        $anho = date('Y');
        return $dia . ' ' . $diaNumero . ' de ' . $mes . ' do ' . $anho;
    }

    static function getHora()
    {
        $hora = date('H');
        $minuto = date('i');
        $segundo = date('s');
        return $hora . ':' . $minuto . ':' . $segundo;
    }

    function getDataHora()
    {
        echo 'Hoxe é ' . self::getData() . ' e son as ' . self::getHora() . '<br>';  
    }
}

echo 'Usamos o calendario: <u>' . Data::getCalendario() . '</u><br>';
Data::getDataHora();