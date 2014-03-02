<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Subiendo...</title>
</head>

<body>
<?php

if(move_uploaded_file($_FILES['file']['tmp_name'],'uploads/'.$_FILES['file']['name'])){
	echo "<script language='javascript' type='text/javascript'>
		alert('Fichero subido con exito');
	</script>";	
	echo'<input type="button" name="back" id="back" onclick=window.location.href="Ej6.html" value="Volver"/>';
	chmod('uploads/'.$_FILES['file']['name'],0644);
}else{
	echo "<script language='javascript' type='text/javascript'>
		alert('Error en la subida de fichero');
	</script>";	
	echo'<input type="button" name="back" id="back" onclick=window.location.href="Ej6.html" value="Volver"/>';	
}


?>
</body>
</html>
