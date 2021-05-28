<?php
session_start();

include_once 'dbConnection.php';
$nombre = $_POST['nombre'];
$passwd = $_POST['password'];

$passwd = stripslashes($passwd);
$passwd = addslashes($passwd);

  $sql1 = "SELECT id,email FROM Emprendimientos WHERE nombre = '$nombre'";
  $result1 = mysqli_query($con, $sql1) or die('Error de ingreso');
  $user = mysqli_num_rows($result1);
  if($user == 1 && $passwd == 'FeriaEDUCA2020'){
    $datos = mysqli_fetch_array($result1);
    $email = $datos['email'];
    $id = $datos['id'];    
    $ip = $_SERVER['REMOTE_ADDR'];
    $navegador = $_SERVER['HTTP_USER_AGENT'];

    $_SESSION["email"] = $email;
    $_SESSION["id"] = $id;
  
    $sesion = mysqli_query($con,"INSERT INTO SESIONES VALUES (NULL,'$ip','$navegador','$email',NOW())") or die ("Error de sesión");
    echo 'exitoe';
} else if($user == 1 && $passwd != 'FeriaEDUCA2020'){
  echo 'nopass'; 
}
    else{
      echo 'nouser';
    }

?>
