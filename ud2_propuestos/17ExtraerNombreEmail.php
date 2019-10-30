<?php

echo $email = 'jose@exemplo.gal<br>';
$posicionArroba = strpos($email, '@');
echo $nombre = substr($email, 0, $posicionArroba);

