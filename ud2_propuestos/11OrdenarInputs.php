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
        <h3>Introduzca 10 numeros</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="inputContainer">
                <input type="text" name="numero1" required>
                <input type="text" name="numero2" required>
                <input type="text" name="numero3" required>
                <input type="text" name="numero4" required>
                <input type="text" name="numero5" required>
                <input type="text" name="numero6" required>
                <input type="text" name="numero7" required>
                <input type="text" name="numero8" required>
                <input type="text" name="numero9" required>
                <input type="text" name="numero10" required>
            </div>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = array();
    array_push($numeros, $_POST['numero1']);
    array_push($numeros, $_POST['numero2']);
    array_push($numeros, $_POST['numero3']);
    array_push($numeros, $_POST['numero4']);
    array_push($numeros, $_POST['numero5']);
    array_push($numeros, $_POST['numero6']);
    array_push($numeros, $_POST['numero7']);
    array_push($numeros, $_POST['numero8']);
    array_push($numeros, $_POST['numero9']);
    array_push($numeros, $_POST['numero10']);

    if (sizeof($numeros) == 10){
        $valorMinimo = encontrarValorMinimo($numeros);
        $valorMaximo = encontrarValorMaximo($numeros);
        foreach ($numeros as $numero){
            if ($numero == $valorMinimo){
                echo $numero . ' min' . '<br>';
            } else if ($numero == $valorMaximo){
                echo $numero . ' max' . '<br>';
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