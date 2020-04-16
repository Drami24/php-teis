<?php

use PHPMailer\PHPMailer\PHPMailer;
require "vendor/autoload.php";

function enviarEmail($carrito, $pedido, $email) {
    $cuerpo = crearEmail($carrito, $pedido, $email);
    return enviarEmails("$email, dalodo@hotmail.es", $cuerpo, "Pedido $pedido confirmado");
}

function crearEmail($carrito, $pedido, $email) {
    $texto = "<h1>Pedido nº $pedido </h1><h2>Restaurante: $email </h2>";
    $texto .= "Detalle del pedido:";
    $productos = obtenerProductos(array_keys($carrito));
    $texto .= "<table>";
    $texto .= "<tr><th>Nombre</th><th>Descripción</th><th>Peso</th><th>Unidades</th></tr>";
    foreach ($productos as $producto) {
        $codigo = $producto['codigo'];
        $nombre = $producto['nombre'];
        $descripcion = $producto['descripcion'];
        $peso = $producto['peso'];
        $unidades = $_SESSION['carrito'][$codigo];
        $texto .= "<tr><td>$nombre</td><td>$descripcion</td><td>$peso</td><td>$unidades</td></tr>";
    }
    $texto .= "</table>";
    return $texto;
}

function enviarEmails($emails, $cuerpo, $asunto = "") {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    //Completar Username con un gmail y su correspondiente password
    $mail->Username = "";
    $mail->Password = "";
    $mail->SetFrom('drami24esp@gmail.com', 'Sistema de pedidos');
    $mail->Subject = $asunto;
    $mail->MsgHTML($cuerpo);
    $arrayEmails = explode(',', $emails);
    //Fuerzo a poner correos de prueba para probar la recepción del mail
    $arrayEmails = array('damilores@gmail.com', 'dalodo@hotmail.es');
    echo '<br>Error: Configure el <b>username</b> y el <b>password</b> del mail<br>';
    foreach ($arrayEmails as $email) {
        $mail->AddAddress($email, $email);
    }
    if(!$mail->Send()) {
        return $mail->ErrorInfo;
    } else {
        return TRUE;
    }
}