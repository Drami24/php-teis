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
        setlocale(LC_ALL,"es_ES.UTF-8");
        return strftime("%A %d de %B do %Y");
        /*$dia = date('l d');
        $mes = date('F');
        $anho = date('Y');
        return $dia . ' de ' . $mes . ' do ' . $anho;*/
    }

    static function getHora()
    {
        return strftime("%H:%M:%S");
        //return date('H:i:s');
    }

    function getDataHora()
    {
        echo 'Hoxe é ' . self::getData() . ' e son as ' . self::getHora() . '<br>';  
    }
}

echo 'Usamos o calendario: <u>' . Data::getCalendario() . '</u><br>';
echo Data::getDataHora();
