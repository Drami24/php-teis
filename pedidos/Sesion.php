<?php

function comprobarSesion()
{
    session_start();
    if(!isset($_SESSION['usuario'])) {
        header("Location: Login.php?redirigido=true");
    }
}
