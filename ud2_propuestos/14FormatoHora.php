<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Introduzca 6 números para convertirlo en formato hora</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Numeros: 
        <input type="text" name="numeros" id="numeros">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php 

// Dificultad 2/10
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = $_POST['numeros'];
    if (is_numeric($numeros)) {
        if (strlen($numeros) == 6) {
            if (construirHora($numeros)) {
                echo construirHora($numeros);
            } else {
                echo 'Los números introducidos no son válidos, rangos: 0-23 : 0-59 : 0-59';
            }
        } else {
            echo 'Se necesitan 6 números para formatear una hora válida';
        }
    } else {
        echo 'No has introducido números';
    }
}

function construirHora($numeros) {
    $hora = substr($numeros, 0, 2);
    $minuto = substr($numeros, 2, 2);
    $segundo = substr($numeros, 4, 2);
    $esHoraValida = $hora < 24 && $minuto < 60 && $segundo < 60;    
    if (!empty($hora) && !empty($minuto) && !empty($segundo) && $esHoraValida) {
        return $hora . ':' . $minuto . ':' . $segundo;
    } else {
        return false;
    }
}