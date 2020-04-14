<?php
    require_once 'bd.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        añadirRestauranteBD (
            $_POST['nombre'],
            $_POST['email'],
            password_hash($_POST['password'], PASSWORD_DEFAULT),
            $_POST['pais'],
            $_POST['ciudad'],
            $_POST['direccion'],
            $_POST['cp']
        );
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <h2>Registrar un restaurante</h2>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"><br>
        <label for="email">Email</label>
        <input type="text" name="email"><br>
        <label for="password">Contraseña</label>
        <input type="text" name="password"><br>
        <label for="pais">País</label>
        <input type="text" name="pais"><br>
        <label for="ciudad">Ciudad</label>
        <input type="text" name="ciudad"><br>
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion"><br>
        <label for="cp">Codigo postal</label>
        <input type="text" name="cp"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>