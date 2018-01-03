<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
//session_start();
//if(!isset($_SESSION['username']) || !isset($_POST['username']))
	//echo "<meta http-equiv=\"refresh\" content=\"0; url=login.php\" />"; // la variable

require "conexion.php";
	//capturar los daos enviados del formulario
	
$nombre=$_POST['name'];
$ciudad=$_POST['city'];
$NoEmpleados="";
$mail=$_POST['mail'];
$pass=$_POST['pass'];
$password_md5 = md5($pass);
$password_md = md5($pass);
$estado="";
$pais=$_POST['country'];
$cp="";
$archivo = "perfil.jpg";
//$archivo = basename($_FILES['imagen']['name']);




$query="INSERT INTO Company (name, city, employee, mail, pass, state, country, postalcode, imagen) VALUES ('$nombre', '$ciudad', '$NoEmpleados', '$mail', '$password_md5', '$estado', '$pais', '$cp', '$archivo')";
	try{
		mysqli_query($conexion, $query);
		//manipular el archivo
		//if(!move_uploaded_file($_FILES['imagen']['tmp_name'],'img/'.$archivo)){
		//	echo "Ocurrio un Error al guardar el archivo";
		//	exit;
		//}
		echo '<script type="text/javascript">alert(\'Empresa registrada correctamente\');</script>'; 
		//echo "<meta http-equiv=\"refresh\" content=\"0; url=index.html\" />"; // la variable
	}
	catch(Exception $e){
		echo "Error".$e->getMessage();
	}
	
mysqli_close($conexion);
?>