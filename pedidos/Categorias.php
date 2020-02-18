<?php
    include_once('Sesion.php');
    //session_start();
    //session_destroy();
    comprobarSesion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<?php include_once('Cabecera.php');?>
<body>
<h1>Bienvenido <?php echo $_SESSION['usuario'];?></h1>

</body>
</html>