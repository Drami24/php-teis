<?php
// https://lachabela.wordpress.com/2012/02/24/fechas-en-espanol-con-php-y-setlocale/

class Data
{
    private static $calendario = "Calendario gregoriano";

    static function getCalendario()
    {
        return self::$calendario;
    }

    static function getData()
    {   
        /*setlocale(LC_ALL,"es_ES.UTF-8");
        echo strftime("%A %d de %B del %Y");*/
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