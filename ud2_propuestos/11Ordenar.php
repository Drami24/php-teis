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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input type="text" name="numeros" id="numeros">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = $_POST['numeros'];
    $numeros = explode(",", $numeros);


    if (sizeof($numeros) == 10){
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
    } else if ($numeros < 4){
        echo 'Non pode introducir menos de 4';
    } else {
        echo 'Non introduciche 10 numeros';
    }
}

function encontrarValorMaximo($numeros){
    return max($numeros);
}

function encontrarValorMinimo($numeros){
    return min($numeros);
}