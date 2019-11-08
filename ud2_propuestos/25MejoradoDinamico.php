<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Areas</title>
</head>
<body>
    <h1>Calcular área</h1>
    <form action="25CalcularArea.php" method="post">
        <fieldset>
            <!-- pi * r2 -->
            <h3>Círculo</h2>
            <label for="radio">Radio</label>
            <input type="text" name="radio" id="radio">
        </fieldset>
        <fieldset>
            <!-- base * altura / 2 -->
            <h3>Triángulo</h3>
            <label for="base">Base</label>
            <input type="text" name="base" id="base">
            <label for="altura">Altura</label>
            <input type="text" name="altura" id="altura">
        </fieldset>
        <fieldset>
            <!-- lador por lado  -->
            <h3>Cuadrado</h3>
            <label for="lado1">Lado 1</label>
            <input type="text" name="lado1" id="lado1">
            <label for="lado2">Lado 2</label>
            <input type="text" name="lado2" id="lado2">
        </fieldset>
        <fieldset>
            <h2>Calcular el área de</h2>
            <input type="radio" name="area" id="circulo" value="circulo">Círculo <br/>
            <input type="radio" name="area" id="triangulo" value="triangulo">Triángulo <br/>
            <input type="radio" name="area" id="cuadrado" value="cuadrado">Cuadrado <br/>
            <input type="submit" value="Calcular">
        </fieldset>
    </form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['area'])){
        $area = $_POST['area'];
    }

    if (isset($area)){
        switch ($area){
            case 'circulo':
                $radio = $_POST['radio'];
                if ($radio && validarNumero($radio)) {
                    echo 'El área del circulo es ' . calcularAreaCirculo($radio);
                } else {
                    echo 'No has introducido un número válido';
                }
            break;
            case 'triangulo':
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                if ($base && validarNumero($base) && $altura && validarNumero($altura)) {
                    echo 'El área del triángulo es ' . calcularAreaTriangulo($base, $altura);
                } else {
                    echo 'No has introducido un número válido';
                }
            break;
            case 'cuadrado':
                $lado1 = $_POST['lado1'];
                $lado2 = $_POST['lado2'];
                if ($lado1 && validarNumero($lado1) && $lado2 && validarNumero($lado2)) {
                    echo 'El área del cuadrado es ' . calcularAreaCuadrado($lado1, $lado2);
                } else {
                    echo 'No has introducido un número válido';
                }
            break;
        }
    } else {
        echo 'No has seleccionado nada!';
    }

    function validarNumero($numero) {
        if ($numero > 0) {
            return true;
        } else {
            return false;
        }
    }

    function calcularAreaCirculo($radio) {
        $area = pi() * pow($radio, 2);
        $area = round($area, 2);
        return $area;
    }

    function calcularAreaTriangulo($base, $altura) {
        $area = $base * $altura / 2;
        $area = round($area, 2);
        return $area;
    }

    function calcularAreaCuadrado($lado1, $lado2) {
        $area = $lado1 * $lado2;
        $area = round($area, 2);
        return $area;
    }
    
}