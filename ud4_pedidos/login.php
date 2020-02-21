<?php
    require_once 'bd.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = comprobarUsuario($_POST['usuario'], $_POST['contraseña']);
        if ($usuario === FALSE) {
            echo 'Las credenciales no son correctas, intentelo de nuevo!';
            $usuario = $_POST['usuario'];
        } else {
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['carrito'] = [];
            header("Location: categorias.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php if(isset($_GET['redirigido'])) {
        echo "<p>Necesita iniciar sesión para continuar</p>";
    }?>
    <form action="" method="post">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" value="<?php if(isset($usuario)) echo $usuario;?>">
        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña">
        <input type="submit" value="Acceder">
    </form>
</body>
</html>