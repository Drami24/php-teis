<?php
require_once 'bd.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = comprobarUsuario($_POST['usuario'], $_POST['contrasinal']);
    if ($usuario === FALSE) {
        echo "FALSE";
    } else {
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['carrito'] = [];
        echo "TRUE";
    }
}
