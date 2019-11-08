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

echo 'Navegador: ' . $navegador = obtenerNavegador($user_agent);

