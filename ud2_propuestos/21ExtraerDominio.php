<?php

$email = "damilores@gmail.com";
$posicionArroba = strpos($email, "@");
echo "El correo electronico es: $email <br><br>";

$dominio = substr($email, $posicionArroba + 1);
echo "El dominio es: " . $dominio;