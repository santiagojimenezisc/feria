<?php
session_start();

include_once 'dbConnection.php';
$email = $_POST['email'];
$passwd = $_POST['password'];

$passwd = stripslashes($passwd);
$passwd = addslashes($passwd);
$passwd = md5($passwd);

  $sql1 = "SELECT email FROM REGISTRO WHERE email = '$email'";
  $result1 = mysqli_query($con, $sql1) or die('Error de ingreso');
  $user = mysqli_num_rows($result1);
  if($user == 1){
  $sql2 ="SELECT r.email,r.password FROM REGISTRO r WHERE r.email = '$email' and r.password = '$passwd' ";
  $result2 = mysqli_query($con, $sql2) or die('Error de ingreso');

  $up = mysqli_num_rows($result2);
    if ($up == 1) {
    $row = mysqli_fetch_array($result2);
    $user = $row['email'];

    $ip = $_SERVER['REMOTE_ADDR'];
    $navegador = $_SERVER['HTTP_USER_AGENT'];

    $_SESSION["email"] = $email;
  
    $sesion = mysqli_query($con,"INSERT INTO SESIONES VALUES (NULL,'$ip','$navegador','$email',NOW())") or die ("Error de sesión");
    echo 'exitoe';
} else{
  echo 'nopass'; 
}
  }
    else{
      echo 'nouser';
    }

?>
