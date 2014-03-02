<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejercicio 2</title>

</head>

<body>
<?PHP
include_once ("clase.php");// incluyo las clases a ser usadas

$usu= new Usuario($_POST["id"]);
if($usu->nombre!=""){
	echo "<script>alert('El usuario existe');</script>"	;
	echo'<input type="button" name="back" id="back" onclick=window.location.href="Ej2.html" value="Volver"/>';	
}
else
{
	$usu->setID($_POST["id"]);	
	$usu->setNombre($_POST["name"]);
	$usu->setApellido($_POST["surname"]);
	$usu->save();
}
?>

</body>
</html>
