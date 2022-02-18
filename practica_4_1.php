<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<?php

#1. Imprime en pantalla  los números impares del 1 al 100, y su suma.

	
	echo "Comenzamos\n";
		for ($i = 1; $i < 100; $i = $i + 2) {
		    echo "<p>$i</p>\n";

	}
	
	echo "ahora la suma es: \n";	
		for ($i = 1; $i < 100; $i = $i + 2) {
		$suma = $suma + $i;

	}

	echo "$suma";
?>

</body>
</html>