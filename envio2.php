<?php
include_once 'dbConnection.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'forms/PHPMailer/src/PHPMailer.php';
require_once 'forms/PHPMailer/src/SMTP.php';
require_once 'forms/PHPMailer/src/Exception.php';

$key='-----BEGIN RSA PRIVATE KEY-----
MIICXQIBAAKBgQC8pSWjuW6Hcc5EKtd8Ws7YEf/cYeWe1/nt4N2N1Z0ENrV+PD1m
ecQaDJngRwwKJYcXehK/Tnz9GybV1njAoMFRnmVKTaFGU3AutwmsScjw11GyXzdy
GEUluKpJ6jizCeMwrf7rosse5woYHHi0VELplO0dk4MXASfxh0eDbjvZnwIDAQAB
AoGAH4w+zzKjmWMe66d+gf1tuhTIhUKZ9AaKdY21f5LJv3qmv4Wzfv++G90fnrJD
AS9leDeiCvxFSs7Pn9NOPmij64jQEGR6wo0ZcvLOnSTyKaJSQcbgY2jqwJitlowc
0Fl6e/mzH70Ez5P1xlejmNKUmwt2il2lUmC1IXplYTvPbwECQQDlTh0hwvAeSYik
DMf5E9eZCT9LYvwJP9uFLcKkPlJu5ZGkpd07adYobdWWxO2FpFyrZXCZm4iR1qIr
Uv1ysdmnAkEA0ptCXg+BAIysg9DLMVS2GiC9PCQykj1/7+KSodXVzq9ixPpIs4Nf
Vjd84ic/AGJvwqA0iiszGw39JrnzdJwPSQJBAMHHFFlOmoqNy7oOzwNPYFgEd4em
m6TZYRKXzC/uNs1elYjVXjLySreZsfEadDsG3gU90T0OMghEoIEKPgKqB2sCQQCy
a2gJSbcvIP4R2fQaQbrYXb4TUlMpg0J8loVE52Rv6jORzruCoRxGbVG2QitkhwBJ
cPGx0DFGjU5W3Zf7xS5JAkAkvPSLs1G7U0dUtdbNNIT3OzONTyiEPmxbJSd/RybX
DeP49LmM+X8s/FRygDTgN8dwIlJyk00AEZbXYh6K0ZP0
-----END RSA PRIVATE KEY-----';


$loop=mysqli_query($con,"SELECT nombre,apellidos,email FROM REGISTRO where id=594") or die ("Error de base"); 

while($datos= mysqli_fetch_array($loop)){
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.educa.org.mx';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'noreply@educa.org.mx';                 // SMTP username
    $mail->Password = '0&fmd7CTFmo#';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to
    $mail->CharSet = 'UTF-8';
    //Recipients
    $mail->setFrom('noreply@educa.org.mx', 'Feria EDUCA, Ahorra y Emprende 2020');
    

$mail->DKIM_domain = 'educa.org.mx';
$mail->DKIM_private_string = $key;
$mail->DKIM_selector = '1563358833.educa'; //Prefix for the DKIM selector
$mail->DKIM_passphrase = ''; //leave blank if no Passphrase
$mail->DKIM_identity = $mail->From;

  $correo = $datos['email'];
  $nombre = $datos['nombre'];
  $apellido = $datos['apellidos'];

    $mail->addAddress($correo);     // Add a recipient
    //$mail->addCC('monica5@educa.org.mx');
    //$mail->addCC('carlosaguilarmarquez@gmail.com');
    $mail->addReplyTo('noreply@educa.org.mx', 'Feria EDUCA, Ahorra y Emprende 2020');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('ceaguilar@qepri.com');
    //$mail->addBCC('desarrollo@qepri.com');
    //$mail->addBCC('carlos_eam@hotmail.com');
    $mail->addBCC('carlosaguilarmarquez@gmail.com');
    //$mail->addBCC('monica5@educa.org.mx');
    //$mail->addBCC('nancy.perez@educa.org.mx');
    //$mail->addBCC('enriqueta.rodriguez@educa.org.mx');

//Content
    $mail->isHTML(true);   

// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");


$mail->CharSet = 'UTF-8';
$mail->Encoding = 'quoted-printable';
$mail->Subject = 'Registro Feria EDUCA, Ahorra y Emprende 2020';

$mail->Body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contacto Feria EDUCA, Ahorra y Emprende 2020</title>
  <!-- Designed by https://github.com/kaytcat -->
  <!-- Robot header image designed by Freepik.com -->

  <style type="text/css">
  @import url(http://fonts.googleapis.com/css?family=Droid+Sans);

  /* Take care of image borders and formatting */

  img {
    max-width: 600px;
    outline: none;
    text-decoration: none;
    -ms-interpolation-mode: bicubic;
  }

  a {
    text-decoration: none;
    border: 0;
    outline: none;
    color: #bbbbbb;
  }

  a img {
    border: none;
  }

  /* General styling */

  td, h1, h2, h3  {
    font-family: Helvetica, Arial, sans-serif;
    font-weight: 400;
  }

  td {
    text-align: center;
  }

  body {
    -webkit-font-smoothing:antialiased;
    -webkit-text-size-adjust:none;
    width: 100%;
    height: 100%;
    color: #2F488C;
    background: #ffffff;
    font-size: 16px;
  }

   table {
    border-collapse: collapse !important;
  }

  .headline {
    color: #ffffff;
    font-size: 36px;
  }

 .force-full-width {
  width: 100% !important;
 }

 .force-width-80 {
  width: 80% !important;
 }




  </style>

  <style type="text/css" media="screen">
      @media screen {
         /*Thanks Outlook 2013! http://goo.gl/XLxpyl*/
        td, h1, h2, h3 {
          font-family: "Droid Sans", "Helvetica Neue", "Arial", "sans-serif" !important;
        }
      }
  </style>

  <style type="text/css" media="only screen and (max-width: 480px)">
    /* Mobile styles */
    @media only screen and (max-width: 480px) {

      table[class="w320"] {
        width: 320px !important;
      }

      td[class="mobile-block"] {
        width: 100% !important;
        display: block !important;
      }


    }
  </style>
</head>
<body class="body" style="padding:0; margin:0; display:block; background:#2F488C -webkit-text-size-adjust:none" bgcolor="#ffffff">
<table align="center" cellpadding="0" cellspacing="0" class="force-full-width" height="100%" >
  <tr>
    <td align="center" valign="top" bgcolor="#ffffff"  width="100%">
      <center>
        <table style="margin: 0 auto;" cellpadding="0" cellspacing="0" width="600" class="w320">
          <tr>
            <td align="center" valign="top">

                <table style="margin: 0 auto;" cellpadding="0" cellspacing="0" class="force-full-width" style="margin:0 auto; ">
                  <tr>
                    <td style="font-size: 30px; text-align:center;">
                      <br>
                        <img src="http:educa.org.mx/FeriaEDUCA2020/assets/img/LOGO-FERIA.png" width="400">
                      <br>
                      <br>
                    </td>
                  </tr>
                </table>

                <table style="margin: 0 auto;" cellpadding="0" cellspacing="0" class="force-full-width" bgcolor="#2F488C">
                  <tr>
                    <td class="headline" style="text-align:center;color: #ffffff;font-size: 20px;">
                      <br>
                      Hola '.$nombre.' '.$apellido.', gracias por registrarte a la Feria Virtual EDUCA, Ahorra y Emprende 2020
                    </td>
                  </tr>
                  <tr>
                    <td>

                      <center>
                        <table style="margin: 0 auto;" cellpadding="0" cellspacing="0" width="85%">
                          <tr>
                            <td style="color:#fff";text-align:center;">
                            <br>
                             Tus datos registrados son los siguientes: <br><br>
                             Nombre: '.$nombre.' '.$apellido.'<br><br>
                             Correo electr&oacute;nico: '.$correo.'<br><br>
                            <br>
                            <br>
                            </td>
                          </tr>
                        </table>
                      </center>

                    </td>
                  </tr>
                </table>

   

                      
                <table style="margin: 0 auto;width:100%" cellpadding="0" cellspacing="0" class="force-full-width" bgcolor="#fff">
                  <tr>
                    <td style="background-color:#fff;width:100%">
                    <br>
                    <br>
                    <br>
                    </td>
                  </tr>
                  <tr>
                    <td style="color:#000; font-size:12px;style="text-align:center;width:100%">
                      <center> EDUCA - 2020 </center>
                       <br>
                       <br>
                    </td>
                  </tr>
                </table>





            
    </td>
  </tr> 
</table>
</body>
</html>';
 
 
  $mail->send();
} catch (Exception $e) {
    echo 'RegistrO no exitoso. Error: ', $mail->ErrorInfo;
}
}
?>
