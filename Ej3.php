<?PHP
include_once ("clase.php");// incluyo las clases a ser usadas

$usu= new Usuario($_POST["id"]);
if($usu->nombre!=""){
echo "1";	
}
else
{
	$usu->setID($_POST["id"]);	
	$usu->setNombre($_POST["name"]);
	$usu->setApellido($_POST["surname"]);
	$usu->save();
}
?>
