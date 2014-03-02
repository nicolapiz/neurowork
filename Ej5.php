<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejercicio 5</title>
	<?php 
            session_start(); 
			
			$_SESSION['ses_id']=session_id();
			
     ?>
    
     <script language="JavaScript" type="text/javascript" src="Ajax.js"></script>
     <script language="JavaScript" type="text/javascript" >
     	function script(){
			var name=document.frm1.name.value;
			var surname=document.frm1.surname.value;
			var id=document.frm1.id.value;
			if(id=="" || name=="" || surname==""){
				alert("Completa todos los datos");	
				return false;
			}else{
				asignar();
				alert("Se han asignado variables de sesion");
				
				return true;	
			}
		}
     </script>

</head>

<body>

	<form action="mostrar.php" method="post" id="frm1" name="frm1" onsubmit="return script(); ">
        <label id="dni">DNI:</label><input type="text" name="id" id="id"/><br />
        <label id="nombre">Nombre:</label><input type="text" name="name" id="name"/><br />
        <label id="apellido">Apellido:</label><input type="text" name="surname" id="surname"/><br />
        <input type="submit" value="Enviar" />
    </form>
  <div> <a href="cerrar.php">Cerrar sesion actual</a> </div>
</body>
</html>
