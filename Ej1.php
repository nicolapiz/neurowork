<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejercicio 1</title>
</head>
<!--Recuperamos y mostramos en texto plano los datos recuperados del formulario-->
<?php
	$name=$_POST["name"];
	$surname=$_POST["surname"];
	$weight=$_POST["weight"];
	$tallness=$_POST["tallness"];
	echo "<div>Nombre: $name</br>";
	echo "Apellido: $surname</br>
		  Peso: $weight</br>
		  Altura: $tallness</div>";
?>
<body>
</body>
</html>
