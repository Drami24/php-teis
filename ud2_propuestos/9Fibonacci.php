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
        Número de fibonacci: <input type="text" name="limiteFibonacci">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php

/* Dificultad: Intermedia 6/10
Ejercicio refactorizado, código anterior:
https://github.com/damianld/php-teis/commit/e68027888ea68a714d0fbd19729501d7e485907b#diff-c35eb9ff909ef4e5c2fa0a8cc84f4725
Aunque he refactorizado varios, este ha sido de los que más he simplificado
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $limite = $_POST['limiteFibonacci'];
    if (is_numeric($limite) && $limite > 0) {
        $numerosFibonacci = obtenerFibonacci($limite);
        echo "<h2>Fibonacci</h2>";
        foreach ($numerosFibonacci as $numero) {
            echo $numero . '<br>';
        }
    }
}

function obtenerFibonacci($limite) {
    $numerosFibonacci = array();
    for ($i=0; $i < $limite; $i++) {
        if ($i > 1){
            $nuevoValor = $numerosFibonacci[$i - 2] + $numerosFibonacci[$i - 1];
            array_push($numerosFibonacci, $nuevoValor);
        } else if ($i == 0) {
            array_push($numerosFibonacci, 0);
        } else if ($i == 1) {
            array_push($numerosFibonacci, 1);
        }
    }
    return $numerosFibonacci;
}