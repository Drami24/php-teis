<?php

//primeros multiplos de 3
$multiplo = 3;
$limite = 100;
$contador = 0;

echo "Los 3 primeros multiplos de 3<br/>";

for($i=1; $i<=$limite; $i++) {
	if(($i%$multiplo) == 0) {
		echo "<br> $i";
		$contador++;
	}
	if ($contador == 3) {
		break;
	}
}