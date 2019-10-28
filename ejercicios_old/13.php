<?php

$texto = $_POST['cadenaTexto'];

if(isset($_POST['mayusculas'])){
    echo mayusculas($texto);
}

if(isset($_POST['minusculas'])){
    echo minusculas($texto);
}

if(isset($_POST['letramayuscula'])){
    echo letramayuscula($texto);
}

if(isset($_POST['inicialesmayusculas'])){
    echo inicialesmayusculas($texto);
}

function mayusculas($texto) {
   return strtoupper($texto);
}

function minusculas($texto) {
    return strtolower($texto);
}

function letramayuscula($texto) {
    return ucfirst($texto);
}

function inicialesmayusculas($texto) {
    return ucwords($texto);
}