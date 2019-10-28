<?php

$cadea = "092402";

$hora = substr($cadea, 0, 2);
$minuto = substr($cadea, 2, 2);
$segundo = substr($cadea, 4, 2);

$tiempo = $hora . ":" . $minuto . ":" . $segundo;
echo $tiempo;