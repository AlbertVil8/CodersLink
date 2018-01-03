<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>CodersLink</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form class="form-signin" action="autentica.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" name = "username" type="email" aria-describedby="emailHelp" placeholder="Enter email" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" name = "password" type="password" placeholder="Password" required>
          </div>
          <div class="form-group">
          </div>
          <button class="btn btn-primary btn-block" type="submit">Login</button>
        </form>
        <?php
        				if (isset($_GET["errorusuario"])){
        					$user = $_GET["errorusuario"];
        				 	if($user !=""){
        				 		//echo $_GET["errorusuario"];
        				 		echo '&nbsp;';
        				 		echo '<div class="alert alert-danger" role="alert">';
 								echo '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>';
 								echo '<span class="sr-only">Error:</span>';
  								echo $_GET["errorusuario"];
							echo '</div>';
        					}
        				 }
        			?>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
