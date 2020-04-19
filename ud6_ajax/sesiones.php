<?php

function comprobarSesion() {
    session_start();
    if (!isset($_SESSION['usuario'])) {
        return FALSE;
    } else {
        return TRUE;
    }
}
