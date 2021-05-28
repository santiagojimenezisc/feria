<?php
session_start();
include_once 'dbConnection.php';
$email = $_POST['email'];
$id = $_POST['id'];

  $sql1 = "SELECT insignia FROM INSIGNIAS WHERE email = '$email' and id_emprendimiento='$id'";
  $result1 = mysqli_query($con, $sql1) or die('Error de ingreso');
  $voto = mysqli_num_rows($result1);
  $votoa = mysqli_fetch_array($result1);
  $votoan = $votoa['insignia'];
  if($voto>0){
      if($votoan == 1){
      $sqlupdate = mysqli_query($con,"UPDATE INSIGNIAS SET insignia=3,puntos='3' WHERE email = '$email' and id_emprendimiento ='$id'") or die ("Error de conexión");
      $contador = mysqli_query($con,"SELECT id FROM INSIGNIAS WHERE id_emprendimiento='$id' and insignia=3") or die ("Error de conexión");
      $conta = mysqli_num_rows($contador);
      $suma=mysqli_query($con,"SELECT SUM(puntos) FROM INSIGNIAS where id_emprendimiento=$id") or die ("Error de conexión");
      $coins=mysqli_fetch_array($suma);
      $educacoins=$coins['SUM(puntos)'];
    $arr = array('alianza' => $conta, 'puntos' => $educacoins,'borra' => '1');
    echo json_encode($arr);
    }
    else if($votoan==2){
      $sqlupdate = mysqli_query($con,"UPDATE INSIGNIAS SET insignia=3,puntos='3' WHERE email = '$email' and id_emprendimiento ='$id'") or die ("Error de conexión");
      $contador = mysqli_query($con,"SELECT id FROM INSIGNIAS WHERE id_emprendimiento='$id' and insignia=3") or die ("Error de conexión");
      $conta = mysqli_num_rows($contador);
      $suma=mysqli_query($con,"SELECT SUM(puntos) FROM INSIGNIAS where id_emprendimiento=$id") or die ("Error de conexión");
      $coins=mysqli_fetch_array($suma);
      $educacoins=$coins['SUM(puntos)'];
    $arr = array('alianza' => $conta, 'puntos' => $educacoins, 'borra' => '2');
    echo json_encode($arr);
    }
    else if($votoan==3){
      $sqlupdate = mysqli_query($con,"UPDATE INSIGNIAS SET insignia=3,puntos='3' WHERE email = '$email' and id_emprendimiento ='$id'") or die ("Error de conexión");
      $contador = mysqli_query($con,"SELECT id FROM INSIGNIAS WHERE id_emprendimiento='$id' and insignia=3") or die ("Error de conexión");
      $conta = mysqli_num_rows($contador);
      $suma=mysqli_query($con,"SELECT SUM(puntos) FROM INSIGNIAS where id_emprendimiento=$id") or die ("Error de conexión");
      $coins=mysqli_fetch_array($suma);
      $educacoins=$coins['SUM(puntos)'];
    $arr = array('alianza' => $conta, 'puntos' => $educacoins);
    echo json_encode($arr);
    }

  }
else{
      $registra = mysqli_query($con,"INSERT INTO INSIGNIAS VALUES (NULL,'$email','$id',3,3,NOW())") or die ("Error de conexión");
      $contador = mysqli_query($con,"SELECT id FROM INSIGNIAS WHERE id_emprendimiento='$id' and insignia=3") or die ("Error de conexión");
      $conta = mysqli_num_rows($contador);
      $suma=mysqli_query($con,"SELECT SUM(puntos) FROM INSIGNIAS where id_emprendimiento=$id") or die ("Error de conexión");
      $coins=mysqli_fetch_array($suma);
      $educacoins=$coins['SUM(puntos)'];
    $arr = array('alianza' => $conta, 'puntos' => $educacoins);
    echo json_encode($arr);
}
?>
