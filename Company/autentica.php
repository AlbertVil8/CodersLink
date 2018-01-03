<?php
session_start();
require "conexion.php";
if(!isset($_POST['username'])&& !isset($_POST['password'])) // la isset checa si esta definida
	echo "<meta http-equiv=\"refresh\" content=\"0; url=login.php\" />"; // la variable
else{
	
	
	//Se lee la informacion del formulario
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password_md5 = md5($password);
	$password_md = md5($password);
	$query='select * from company';
	$resultado= mysqli_query($conexion, $query);
	if(!$resultado){
		die("<br/>Error en ejecutar la consulta $query en la base de datos:". mysql_error());
		exit;
	}
	
	//$numero_filas= mysql_num_rows($resultado);
	//echo "<br>Se tienen: ".$numero_filas." regitros";
	$valido=false;
	while($datos=mysqli_fetch_assoc($resultado)){
		if($datos['mail']==$username and  $datos['pass']==$password_md5){
			$valido=true;
			break;
		}
		//echo $datos['username']."-".$datos['password'];
	}
	// si existe
	if($valido){
		$_SESSION['username']=$username;
		echo "<meta http-equiv=\"refresh\" content=\"0; url=Company.php\" />"; // la variable
	}
	//sino existe
	else{
		$cad="Datos incorrectos intente nuevamente.";
         header("Location: login.php?errorusuario=$cad");
		echo "<meta http-equiv=\"refresh\" content=\"0; url=login.php\" />"; // la variable
	}
	
}
	


?>
