<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Numéros: <input type="text" name="numeros">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = $_POST['numeros'];
    $datos = $numeros;
    $pos1 = 0;
    $pos2 = 1;
    $inicio = array(0, 1);
    $numeros -= 3;
    $numeros /= 2;

    for ($i=0; $i <= $numeros; $i++) {
            $pos1 += $pos2;
            $pos2 += $pos1;
            array_push($inicio, $pos1);
            array_push($inicio, $pos2);
    }


    function siguienteNumero($numeroAnterior) {
        $numeroSiguiente += $numeroAnterior; 
    }

    $i = 1;
    if ($datos % 2 != 0) {
        array_pop($inicio);
    }
    echo "<h2>Fibonacci</h2>";
    foreach ($inicio as $numero) {
        echo $i++ . ': ' .$numero . '<br>';
    }
    
}

