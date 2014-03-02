<?PHP
session_start();

if(isset($_SESSION["ses_id"])){ 
$_SESSION["id"]=$_POST["id"];
$_SESSION["name"]=$_POST["name"];
$_SESSION["surname"]=$_POST["surname"];

}else{
	header("location:Ej5.php");
}
?>
