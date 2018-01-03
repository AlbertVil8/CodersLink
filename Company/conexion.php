<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
	//Este archivo tiene los parametros para conectarme a la base de datos
	//Definimos parametros de conexion a la base de datos
	$host="localhost";
	$user="coderslink";
	$passwordbd="coderslink";
	$basedatos="coderslink";
	
	//relizarmos la conexion a la base de datos
	$conexion= mysqli_connect($host, $user, $passwordbd);
	if(!$conexion){
		die("Error en conexion de base de datos:". mysqli_error());
		exit;
	}
	//echo "Conectado a servidor de base de datos satisfactoriamente";
	//Seleccionar la base de datos
	$base_seleccionada=mysqli_select_db($conexion, $basedatos);
	if(!$base_seleccionada){
		die("<br/>Error en seleccionar la base de datos:". mysqli_error());
		exit;
	}
	//echo "<br>Conexion realizar a la base de datos: OK";
?>