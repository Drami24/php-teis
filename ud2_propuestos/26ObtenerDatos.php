<?php

$user_agent = $_SERVER['HTTP_USER_AGENT'];

function obtenerNavegador($user_agent){
    if(strpos($user_agent, 'MSIE') !== FALSE)
        return 'Internet explorer';
    else if(strpos($user_agent, 'Edge') !== FALSE) //Microsoft Edge
        return 'Microsoft Edge';
    else if(strpos($user_agent, 'Trident') !== FALSE) //IE 11
        return 'Internet explorer';
    else if(strpos($user_agent, 'Opera Mini') !== FALSE)
        return "Opera Mini";
    else if(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE)
        return "Opera";
    else if(strpos($user_agent, 'Firefox') !== FALSE)
        return 'Mozilla Firefox';
    else if(strpos($user_agent, 'Chrome') !== FALSE)
        return 'Google Chrome';
    else if(strpos($user_agent, 'Safari') !== FALSE)
        return "Safari";
    else
        return 'No hemos podido detectar su navegador';
}

echo '1. Navegador: <b>' . $navegador = obtenerNavegador($user_agent) . '</b><br><br>';

echo '2. La version de PHP es: <b>' . phpversion() . '</b><br><br>';

echo '3. Protocolo: <b>' . $_SERVER['SERVER_PROTOCOL'] . '</b><br>';
echo 'Nombre del Host: <b>' . $_SERVER['SERVER_NAME'] . '</b><br>';
echo 'Path: <b>' . $_SERVER['SCRIPT_NAME'] . '</b><br><br>';

echo '4. IP Cliente: <b>' . $_SERVER['HTTP_HOST'] . '</b><br>';
echo 'IP Servidor: <b>' . $_SERVER['REMOTE_ADDR'] . '</b><br>';
echo 'Nombre del archivo: <b>' . basename($_SERVER['PHP_SELF']) . '</b><br><br>';

echo '5. Propietario del archivo: <b>';
$usuario = posix_getpwuid(fileowner(basename($_SERVER['PHP_SELF'])));
echo $usuario['name'] . '</b><br><br>';

echo '6. Url actual: <b>' . $url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] . '</b>';