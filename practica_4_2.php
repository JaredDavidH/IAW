<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php

$suma = 0;

echo "Mostramos el cuadrado de los numeros" . "<br>";
	
		for ($i = 1; $i <= 50; $i++) {
			$suma = $suma + $i**2;			
			echo $i**2 . "<br>";

	}
			echo "La suma total es: " . $suma;
 ?>
</body>
</html>