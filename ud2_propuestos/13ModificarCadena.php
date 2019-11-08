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
        Primera letra: <input type="radio" name="transformarTexto" id="primeraLetra" value="primeraLetra"> <br/>
        Primera letra cada palabras: <input type="radio" name="transformarTexto" id="primeraLetraMayuscula" value="primeraLetraMayuscula"> <br/>
        <br>
        <input type="submit" value="Enviar"> <hr>
    </form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST['cadena'];
    $accion = $_POST['transformarTexto'];

    switch($accion){
        case 'mayusculas':
            echo convertirAMayusculas($texto) . '<br>';
            break;
        case 'minusculas':
            echo convertirAMinusculas($texto) . '<br>';
            break;
        case 'primeraLetra':
            echo ponerPrimeraLetraMayuscula($texto) . '<br>';
            break;
        case 'primeraLetraMayuscula':
            echo ponerPalabrasConLetraMayuscula($texto) . '<br>';
            break;
    }
}

function convertirAMayusculas($texto) {
    return strtoupper($texto);
}

function convertirAMinusculas($texto) {
    return strtolower($texto);
}

function ponerPrimeraLetraMayuscula($texto) {
    return ucfirst($texto);
}

function ponerPalabrasConLetraMayuscula($texto) {
    return ucwords($texto);
}