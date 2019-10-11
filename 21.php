<?php

$email = "damilores@gmail.com";
$posicionArroba = strpos($email, "@");
$longitud = strlen($email);
echo "El correo electronico es: $email <br><br>";

$final = substr($email, $posicionArroba +1);
echo "El dominio es: " . $final;