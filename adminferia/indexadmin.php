<?php
session_start();

if(isset($_SESSION['admin'])){
   header('location:index.php');
}
else{}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
.swal-button {
  padding: 7px 19px;
  border-radius: 2px;
  background-color: #8B0000;
  font-size: 12px;
  border: 1px solid #8B0000;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.3);
}

.swal-button:focus {
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.3) !important;
}

.swal-footer {
    text-align: center;
}

.swal-button:active {

    background-color: #8B0000;
</style>



<title>Feria EDUCA 2020, Ahorra y Emprende | Panel de administración</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
  <link href="../assets/img/favicon32x32.ico" rel="icon">
  <link href="../assets/img/favicon16x16.ico" rel="apple-touch-icon"><!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/dist/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->

<script defer src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

</head>
<body>
	
<?php
if (@$_GET['w']==1) {
  echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  title: "¡Error!",
  text: "Verifique su usuario y/o contraseña.",
  icon: "error",
  button: "Reintentar",
});';
  echo '}, 1000);</script>';
}
?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(../assets/img/LOGO-FERIA.png);background-size: contain;">
				</div>

				<form class="login100-form validate-form" action="admin.php" method="POST">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Escriba su usuario">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="username" placeholder="Escriba su usuario">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Escriba su contraseña">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="password" placeholder="Escriba su contraseña">
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn">
						<center><button class="login100-form-btn">
							Accesar
						</button></center>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="assets/vendor/jquery/dist/jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/dist/js/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

</body>
</html>