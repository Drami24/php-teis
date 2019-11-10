<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Version 1, introduzca 10 numeros separado por comas</h3>
    <p>Válido: 1,2,3,4,5,6,7,8,9,10</p>
    <p>No válido: 1,2,3,4,asd,5,6,7,8,9</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="text" name="numeros" id="numeros">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php
// Dificultad 3/10

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = $_POST['numeros'];
    $numeros = explode(',', $numeros);
    if (sizeof($numeros) >= 4) {
        if (validarNumeros($numeros)) {
            $valorMinimo = encontrarValorMinimo($numeros);
            $valorMaximo = encontrarValorMaximo($numeros);
            foreach ($numeros as $numero){
                if ($numero == $valorMinimo){
                    echo $numero . 'min' . '<br>';
                } else if ($numero == $valorMaximo){
                    echo $numero . 'max' . '<br>';
                } else {
                    echo $numero . '<br>';
                }
            }
        } else {
            echo 'No has introducido números separados por comas';
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