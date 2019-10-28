<?php

$piramide = "*";
$piramideinvertida = "*********";

echo "Piramide <br><br>";
for ($i = 1; $i<=9; $i++) {
	echo $piramide ;
	echo "<br>";
	$piramide .= "*";
}

echo "<br><br> Piramide invertida<br><br>";
for ($j = 1; $j<=9; $j++) {
	echo $piramideinvertida;
	$piramideinvertida = substr($piramideinvertida, 1);
	echo "<br>";
}