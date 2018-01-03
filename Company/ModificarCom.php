<?php
  session_start();
  if(!isset($_SESSION['username']))
    echo "<meta http-equiv=\"refresh\" content=\"0; url=../login.php\" />"; // la variable
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
//session_start();
//if(!isset($_SESSION['username']) || !isset($_POST['username']))
	//echo "<meta http-equiv=\"refresh\" content=\"0; url=login.php\" />"; // la variable

require "../conexion.php";
	//capturar los daos enviados del formulario
	
$name=$_POST['name'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$zipcode=$_POST['postalcode'];
$about = $_POST['about'];

$username = $_SESSION['username'];


$query="UPDATE Company SET name = '$name', city = '$city', state = '$state', country = '$country', postalcode = '$zipcode', about = '$about' WHERE mail = '$username'";
	try{
		mysqli_query($conexion, $query);
		echo '<script type="text/javascript">alert(\'Empresa registrada correctamente\');</script>'; 
		echo "<meta http-equiv=\"refresh\" content=\"0; url=Company.php\" />"; // la variable
	}
	catch(Exception $e){
		echo "Error".$e->getMessage();
	}
	
mysqli_close($conexion);
?>