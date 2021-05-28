<?php
session_start();
if (isset($_SESSION["admin"])) {
    session_destroy();
}
else{
    header("location:indexadmin.php");
}
include_once '../dbConnection.php';
$ref      = @$_GET['q'];
$username = $_POST['username'];
$password = $_POST['password'];

$username = stripslashes($username);
$username = addslashes($username);
$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);
$result = mysqli_query($con, "SELECT user FROM ADMIN WHERE user = '$username' and password = '$password'") or die('Error');
$count = mysqli_num_rows($result);
if ($count == 1) {
    while ($row = mysqli_fetch_array($result)) {    
        $username = $row['user'];
    }
    $_SESSION["admin"] = $username;
    $ip = $_SERVER['REMOTE_ADDR'];
    $navegador = $_SERVER['HTTP_USER_AGENT'];
    $sesion = mysqli_query($con,"INSERT INTO SESIONES VALUES (NULL,'$ip','$navegador','$username',NOW())") or die ("Error de sesión"); 
    header("location:index.php");
} else
    header("location:indexadmin.php?w=1");

?>