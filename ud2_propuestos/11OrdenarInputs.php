<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .inputContainer input {
            width: 3em;
        }
        .inputContainer {
            display: inline-block;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h3>Versión 2, Introduzca 10 numeros</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="inputContainer">
            <input type="text" name="numero1">
            <input type="text" name="numero2">
            <input type="text" name="numero3">
            <input type="text" name="numero4">
            <input type="text" name="numero5">
            <input type="text" name="numero6">
            <input type="text" name="numero7">
            <input type="text" name="numero8">
            <input type="text" name="numero9">
            <input type="text" name="numero10">
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php

/*  Dificultad 3/10
    El ejercicio funciona aunque no se envien los 10 inputs, aunque se necesita un mínimo de 4
    El programa avisa si no se han introducido numeros en un campo
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = array();
    for ($i = 1; $i<=10; $i++) {
        if($_POST['numero' . $i]) {
            array_push($numeros, $_POST['numero' . $i]);
        }
    }
    if (sizeof($numeros) >= 4) {
        if (validarNumeros($numeros)) {
            $valorMinimo = encontrarValorMinimo($numeros);
            $valorMaximo = encontrarValorMaximo($numeros);
            foreach ($numeros as $numero) {
                if ($numero == $valorMinimo) {
                    echo $numero . ' min' . '<br>';
                } else if ($numero == $valorMaximo) {
                    echo $numero . ' max' . '<br>';
                } else {
                    echo $numero . '<br>';
                }
            }
        } else {
            echo 'No has introducido números.';
        }
    } else {
        echo 'No has introducido un mínimo de 4 números.';
    }
}

function validarNumeros($numeros) {
    foreach ($numeros as $numero) {
        if (!is_numeric($numero)) {
            return false;
        }
    }
    return true;
}

function encontrarValorMaximo($numeros) {
    return max($numeros);
}

function encontrarValorMinimo($numeros) {
    return min($numeros);
}