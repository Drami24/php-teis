<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>13</title>
</head>
<body>
    <h2>Transformar cadena</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <fieldset>
            Texto: <input type="text" name="cadena" id="cadena" required>
        </fieldset>
        
        Mayúsculas: <input type="radio" name="transformarTexto" id="mayusculas" value="mayusculas"> <br/>
        Minúsculas: <input type="radio" name="transformarTexto" id="minusculas" value="minusculas"> <br/>
        Primera Letra: <input type="radio" name="transformarTexto" id="primeraLetra" value="primeraLetra"> <br/>
        Primera Letra Palabras: <input type="radio" name="transformarTexto" id="primeraLetraMayuscula" value="primeraLetraMayuscula"> <br/>
        <br>
        <input type="submit" value="Enviar"> <hr>
    </form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST['cadena'];
    $accion = $_POST['transformarTexto'];

    if (isset($accion) && $accion == 'mayusculas') {
        convertirAMayusculas($texto);
    }

    if (isset($accion) && $accion == 'minusculas') {
        convertirAMinusculas($texto);
    }

    if (isset($accion) && $accion == 'primeraLetra') {
        ponerPrimeraLetraMayuscula($texto);
    }

    if (isset($accion) && $accion == 'primeraLetraMayuscula') {
        ponerPalabrasConLetraMayuscula($texto);
    }

}

function convertirAMayusculas($texto) {
    echo strtoupper($texto) . '<br>';
}

function convertirAMinusculas($texto) {
    echo strtolower($texto) . '<br>';
}

function ponerPrimeraLetraMayuscula($texto) {
    echo ucfirst($texto) . '<br>';
}

function ponerPalabrasConLetraMayuscula($texto) {
    echo ucwords($texto) . '<br>';
}