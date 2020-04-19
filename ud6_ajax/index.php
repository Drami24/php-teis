<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/cargarDatos.js"></script>
    <script src="js/sesion.js"></script>
    <title>Login</title>
</head>
<body>
    <section id="login">
        <form onsubmit="return login()" method="post">
            <label for="usuario">Usuario</label>
            <input id="usuario" type="text" name="usuario">
            <label for="contrasinal">Contraseña</label>
            <input id="contrasinal" type="password" name="contrasinal">
            <input type="submit" value="Acceder">
        </form>
    </section>
    <section id="principal" style="display:none">
        <header>
            <?php require_once 'cabecera.php' ?>
        </header>
        <h2 id="titulo"></h2>
        <section id="contenido">
        </section>
    </section>
</body>
</html>