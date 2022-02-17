<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php

  #variables
  $x = 8 - 6.4;
  $y = 1.6;

  #Es lo mismo pero poco elegante y poco eficiente.
  echo $x;
  echo "<br>";
  
  #El "." es para concadenar, simplifica lo de arriba.
  echo $y ."<br>";

  #obtenemos detalles de nuestras variables.
  var_dump($x);
  echo "<br>";
  var_dump($y);

  #Funcion if y el dump nos devuelve false porque la variable x es distinto que y
  echo "<br>";
  if ($x == $y) {
 	echo "iguales";
 } else {
 	echo "distintos";	
 }
  echo "<br>";
  var_dump ($x == $y);

  #round nos permite redondear y el 2 indica en la cantidad de numeros que quiere redondear.
  echo "<br>";
  $x =round($x,2);
  $y =round($y,2);
  var_dump ($x == $y);

 ?>

</body>
</html>