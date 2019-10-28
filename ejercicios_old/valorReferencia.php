<?php

$numero = 8;
echo "POR VALOR";
echo "<br>Valor da variable número antes da función: $numero <br><br>";
function sumar_uno($numero) {
    $numero++;
    echo "Valor da variable dentro da función: $numero <br><br>";
}
sumar_uno($numero);
echo "Valor da variable despois da función: $numero <br><br>";

echo "<br>POR REFERENCIA";
echo "<br>Valor da variable número antes da función: $numero <br><br>";
function sumar_uno_referencia(&$numero) {
    $numero++;
    echo "Valor da variable dentro da función: $numero <br><br>";
}
sumar_uno_referencia($numero);
echo "Valor da variable despois da función: $numero <br><br>";


?>