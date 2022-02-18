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
  $a = 1.23456879;
  $b = 1.23456780;
  $epsilon = 0.00001;

 echo $a - $b;
 
 echo "<br>";

 #var_dump(), es para que nos detalle nuestra variable
 var_dump($a-$b);

 echo "<br>";

#abs para convertirlo en positivo
 if(abs($a-$b) < $epsilon) {
	echo "true";
}
?>
</body>
</html>