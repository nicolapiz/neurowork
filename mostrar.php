<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mostrar variables</title>
</head>

<body>
<?PHP
	session_start();
	if(isset($_SESSION["ses_id"]) and isset($_SESSION["id"])){ 
	echo 'El identificador de sesion es: '.$_SESSION["ses_id"].'</br>';
	echo 'El DNI es: '.$_SESSION["id"].'</br>';
	echo 'El nombre es: '.$_SESSION["name"].'</br>';
	echo 'El apellido es: '.$_SESSION["surname"];
	}else{
		header("location:Ej5.php");
		echo "No se han iniciado variables";
	}
?>
</body>
</html>


