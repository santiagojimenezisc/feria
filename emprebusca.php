<?php
include_once 'dbConnection.php';
session_start();
if (!(isset($_SESSION['email']))) {
} else {
    $email = $_SESSION['email'];
}
$buscanombre=mysqli_query($con,"SELECT * FROM `REGISTRO` where email='$email'") or die ("Error de nombre");
$name=mysqli_fetch_array($buscanombre);
$namei=$name['nombre'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Feria EDUCA - Ahorra y Emprende - 2020 </title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon32x32.ico" rel="icon">
  <link href="assets/img/favicon16x16.ico" rel="apple-touch-icon">

  <!-- Font Awesome icons (free version)-->
 <!-- <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css?v=2.1.57" rel="stylesheet">


    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/wow/wow.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<style type="text/css">
.emprende {
  position: relative;
  width: 45%;
  margin-bottom: 45px;
  margin-right: 5%;
  margin-top: 5%;
}

@media (max-width: 991px) {
  .emprende{
    width: 100%;
    margin-right: 0%;
  }
}


.image {
  opacity: 1;
  display: block;
  max-width: 100%;
  height: 300px;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  width: 100%
}

.emprende:hover .image {
  opacity: 0.2;
}

.emprende:hover .middle {
  opacity: 1;
}

.text {
  color: #fff;
  font-size: 16px;
  padding: 16px 32px;
}

.btn-emprende{
position: relative;
background-color: #2F488C;
border: none;
padding: 10px;
width: auto;
text-align: center;
-webkit-transition-duration: 0.4s;
transition-duration: 0.4s;
text-decoration: none;
overflow: hidden;
height: auto;
margin-top: 25px;
color: #fff;
border-radius: 20px;
}

.btn-like-1{
position: relative;
background-color: #f8df00;
border: none;
padding: 10px;
width: auto;
text-align: center;
-webkit-transition-duration: 0.4s;
transition-duration: 0.4s;
text-decoration: none;
overflow: hidden;
height: auto;
margin-top: 25px;
color: #000;
border-radius: 20px;
margin-right: 25px;
}

.btn-like-1:hover{
position: relative;
background-color: #f8df00;
border: none;
padding: 10px;
width: auto;
text-align: center;
-webkit-transition-duration: 0.4s;
transition-duration: 0.4s;
text-decoration: none;
overflow: hidden;
height: auto;
margin-top: 25px;
color: #000;
border-radius: 20px;
margin-right: 25px;
box-shadow: 0px 2px 10px 5px #f8df00;

}

.btn-like-1:focus{
position: relative;
background-color: #f8df00;
border: none;
padding: 10px;
width: auto;
text-align: center;
-webkit-transition-duration: 0.4s;
transition-duration: 0.4s;
text-decoration: none;
overflow: hidden;
height: auto;
margin-top: 25px;
color: #000;
border-radius: 20px;
margin-right: 25px;
box-shadow: 0px 2px 10px 5px #f8df00;

}

.btn-like-2{
position: relative;
background-color: #ee3532;
border: none;
padding: 10px;
width: auto;
text-align: center;
-webkit-transition-duration: 0.4s;
transition-duration: 0.4s;
text-decoration: none;
overflow: hidden;
height: auto;
margin-top: 25px;
color: #fff;
border-radius: 20px;
margin-right: 25px;
}

.btn-like-2:hover{
position: relative;
background-color: #ee3532;
border: none;
padding: 10px;
width: auto;
text-align: center;
-webkit-transition-duration: 0.4s;
transition-duration: 0.4s;
text-decoration: none;
overflow: hidden;
height: auto;
margin-top: 25px;
color: #fff;
border-radius: 20px;
margin-right: 25px;
box-shadow: 0px 2px 10px 5px #ee3532;
}


.btn-like-2:focus{
position: relative;
background-color: #ee3532;
border: none;
padding: 10px;
width: auto;
text-align: center;
-webkit-transition-duration: 0.4s;
transition-duration: 0.4s;
text-decoration: none;
overflow: hidden;
height: auto;
margin-top: 25px;
color: #fff;
border-radius: 20px;
margin-right: 25px;
box-shadow: 0px 2px 10px 5px #ee3532;
}


.btn-like-3{
position: relative;
background-color: #24b573;
border: none;
padding: 10px;
width: auto;
text-align: center;
-webkit-transition-duration: 0.4s;
transition-duration: 0.4s;
text-decoration: none;
overflow: hidden;
height: auto;
margin-top: 25px;
color: #fff;
border-radius: 20px;
}

.btn-like-3:hover{
position: relative;
background-color: #24b573;
border: none;
padding: 10px;
width: auto;
text-align: center;
-webkit-transition-duration: 0.4s;
transition-duration: 0.4s;
text-decoration: none;
overflow: hidden;
height: auto;
margin-top: 25px;
color: #fff;
border-radius: 20px;
box-shadow: 0px 2px 10px 5px #24b573;
}

.btn-like-3:focus{
position: relative;
background-color: #24b573;
border: none;
padding: 10px;
width: auto;
text-align: center;
-webkit-transition-duration: 0.4s;
transition-duration: 0.4s;
text-decoration: none;
overflow: hidden;
height: auto;
margin-top: 25px;
color: #fff;
border-radius: 20px;
box-shadow: 0px 2px 10px 5px #24b573;
}

.modal-body p{
font-style: normal!important;
}

.close:hover{
  color:#2F488C!important;
}
</style>


</head>

   <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#intro">The<span>Event</span></a></h1>-->
        <a href="index.php" class="scrollto"><img src="assets/img/LOGO-EDUCA.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="index.php#about">Objetivo</a></li>
          <li><a href="index.php#speakers">Streaming</a></li>
          <li><a href="index.php#schedule">Programa</a></li>
          <li><a href="index.php#venue">Aflatoun</a></li>
          <li class="menu-active"><a href="emprendimientos.php">Emprendimientos</a></li>
          <li><a href="index.php#gallery">Galería</a></li>
          <li><a href="index.php#supporters">Donantes</a></li>
          <li><a href="index.php#contact">Contacto</a></li>
          <!--<li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li>-->
          <?
          if($namei!=''){
            echo'<button class="btn dropdown-toggle registro" type="button" data-toggle="dropdown">Hola '.$namei.'
          <span class="caret"></span></button><ul class="dropdown-menu">
                <li><a class="dregistro" href="logout.php">Cerrar sesión</a></li>
              </ul>';
          }
          else{
          echo'<button class="btn dropdown-toggle registro" type="button" data-toggle="dropdown">Registro
          <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a class="dregistro register" href="registro.php" data-toggle="modal" data-target="#register" data-dismiss="modal">Registrarse</a></li>
                <li><a class="dregistro inicia" href="login.php" data-toggle="modal" data-target="#inicia" data-dismiss="modal">Iniciar Sesión</a></li>
              </ul>';
          }
          ?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->


        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="emprendimientos">
            <div class="container">
                  <div class="section-header">
          <h2>Emprendimientos</h2>
          <p>Puntúa, regala insignias y realiza donaciones a nuestros emprendedores.</p>
        </div>


    
<?
if (@$_GET['pabellon'] == 1) {
        $categoria = $_POST['g1'];
        $tipo = $_POST['g2'];
        $etapa = $_POST['g3'];
          $modal = 0;
          echo'<div class="container">
        <div class="col-lg-12">
        <form action="emprebusca.php?busqueda=1" method="POST" style="display:flex;">
        <div class="col-md-3">
        <select class="browser-default custom-select" id="s1" name="s1">
          <option value="">Seleccione el Pabellón</option>
          <option value="1" selected>Pabellón General</option>
          <option value="2">Pabellón Medio Ambiente</option>
          <option value="3">Pabellón Tecnología</option>
          <option value="4">Pabellón AlquiLab</option>

        </select> 
        </div>
        <div class="col-md-3">
          <select class="browser-default custom-select" id="s2" name="s2">
          <option value="" ' . ($categoria == '' ? 'selected' : ''). '>Seleccione la categoría</option>
          <option value="1" ' . ($categoria == '1' ? 'selected' : ''). '>Primaria</option>
          <option value="2" ' . ($categoria == '2' ? 'selected' : ''). '>Secundaria</option>
          <option value="3" ' . ($categoria == '3' ? 'selected' : ''). '>Media Superior</option>
          </select> 
        </div>
        <div class="col-md-3">
       <select class="browser-default custom-select" id="s3" name="s3">
        <option value="" ' . ($tipo == '' ? 'selected' : ''). '>Seleccione el tipo</option>
        <option value="1" ' . ($tipo == '1' ? 'selected' : ''). '>Social</option>
        <option value="2" ' . ($tipo == '2' ? 'selected' : ''). '>Financiero</option>
        </select>
        </div>
        <div class="col-md-3">
        <button type="submit" class="btn btn-primary">Buscar</btn>
        </div>
        </form>
        </div>
        </div>'; 
        echo'<div class="row">';
        if ($categoria!='' && $tipo!='' && $etapa!=''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=1 and tipo_categoria=$categoria and tipo=$tipo and tipo_etapa=$etapa ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');
        }
        else if($categoria!='' && $tipo=='' && $etapa==''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=1 and tipo_categoria=$categoria ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else if($categoria=='' && $tipo!='' && $etapa==''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=1 and tipo=$tipo ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else if($categoria=='' && $tipo=='' && $etapa!=''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=1 and tipo_etapa=$etapa ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else if($categoria!='' && $tipo!='' && $etapa==''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=1 and tipo_categoria=$categoria and tipo=$tipo ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else if($categoria!='' && $tipo=='' && $etapa!=''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=1 and tipo_categoria=$categoria and $ipo_etapa=$etapa ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else if($categoria=='' && $tipo!='' && $etapa!=''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=1 and tipo=$tipo and tipo_etapa=$etapa ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        } 
        else{
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=1 ORDER BY RAND()") or die('Error al mostrar resultados');
        }
        if($registros=mysqli_num_rows($busqueda)==0){
          echo'<br><p> No existen emprendimientos que coincidan con su búsqueda. Intente buscar de nuevo </p>';
        }
        while ($row = mysqli_fetch_array($busqueda)) {  
        $modal=$modal+1;
        $nombre   = $row['nombre'];
        $objetivo = $row['Objetivo'];
        $imagen = $row['id'];
        $datos = mysqli_query($con, "SELECT * FROM `Emprendimientos` where id=$imagen") or die('Error al mostrar datos');
        $datosi = mysqli_fetch_array($datos);
        $nivel = $datosi['tipo_categoria'];
        $grado = $datosi['grado'];
        $tipo = $datosi['tipo_plataforma'];
        $etapa1 = $datosi['tipo_etapa'];
        $problema = $datosi['problema'];
        $descripcion = $datosi['descripcion'];
        $integrantes = $datosi['integrantes'];
        $escuela = $datosi['escuela'];
        $buscanivel = mysqli_query($con, "SELECT nivel FROM `CTLGO_CATEGORIA` where id=$nivel") or die('Error al mostrar datos');
        $nivelda = mysqli_fetch_array($buscanivel);
        $niveli = $nivelda['nivel'];
        $buscaetapa = mysqli_query($con, "SELECT etapa FROM `CTLGO_ETAPA` where id=$etapa1") or die('Error al mostrar datos');
        $etapad = mysqli_fetch_array($buscaetapa);
        $etapa = $etapad['etapa'];

        echo'
<div class="emprende">        
  <center><img src="assets/img/logos/'.$imagen.'.png" alt="Avatar" class="image" class="img-fluid"></center>
  <div class="middle">
    <div class="text">
      <h2><a href="#" data-toggle="modal" data-target="#modal'.$modal.'">'.$nombre.'</a></h2>
              <!--<div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>-->
              <p>'.$objetivo.'</p>
              <a href="#" data-toggle="modal" data-target="#modal'.$modal.'"><i style="color:#000;" class="fa fa-eye 2x"> Ver</i></a>
    </div>
  </div>
  <button type="button" class="btn btn-primary btn-emprende" data-toggle="modal" data-target="#modal'.$modal.'">'.$nombre.'</btn>
</div>

<!-- Modal Emprendimiento-->
        <div class="portfolio-modal modal fade" id="modal'.$modal.'" tabindex="-1" role="dialog" aria-labelledby=""modal'.$modal.'"" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times 2x"></i></span>
                    </button>
                    <div class="modal-header">
        <center><h2 class="modal-title" id="titulo" style="color:#2F488C !important;text-align: center !important">'.$nombre.'</h2></center>
        </div>
                     <div class="modal-body">
                        ';if($namei==''){
                          echo '<p><a class="register" href="registro.php" data-toggle="modal" data-target="#register" data-dismiss="modal">Regístrate</a> o <a class="inicia" href="login.php" data-toggle="modal" data-target="#inicia" data-dismiss="modal">inicia sesión </a> para regalar insignias a este emprendimiento</p><br>';
                        }
                        $checainova=mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento=$imagen and insignia=1") or die ("Error de conexion");
                        $checkinova=mysqli_num_rows($checainova);
                        $checaempatia=mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento=$imagen and insignia=2") or die ("Error de conexion");
                        $checkempatia=mysqli_num_rows($checaempatia);
                        $checalianza=mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento=$imagen and insignia=3") or die ("Error de conexion");
                        $checkalianza=mysqli_num_rows($checalianza);
                           $suma=mysqli_query($con,"SELECT SUM(puntos) FROM INSIGNIAS where id_emprendimiento=$imagen");
                        $coins=mysqli_fetch_array($suma);
                        $educacoins=$coins['SUM(puntos)'];
                        if($educacoins==""){
                          $educacoins=0;
                        }
                        echo'
                        <center><img src="assets/img/logos/'.$imagen.'.png" style="width:30%">';
                        if($namei!=''){
                        echo'<p><img src="assets/img/coin.png" style="width:15px"><span class="coin-'.$imagen.'"> '.$educacoins.'</span> EDUCACOINS conseguidos</p>
                          <p><button onclick="inova(this);" data-id="'.$imagen.'" data-email="'.$email.'" type="button" class="btn btn-like-1"></btn><i class="fa fa-lightbulb-o 3x" aria-hidden="true"></i> Innovación <span class="input-group-text inova-'.$imagen.'" style="display:inline!important">'.$checkinova.'</span>
                          <button onclick="empatia(this);" data-id="'.$imagen.'" data-email="'.$email.'" type="button" class="btn btn-like-2"><i class="fa fa-heart 3x" aria-hidden="true"></i> Empatia <span class="input-group-text empatia-'.$imagen.'" style="display:inline!important">'.$checkempatia.'</span></btn>
                          <button onclick="alianza(this);" data-id="'.$imagen.'" data-email="'.$email.'" type="button" class="btn btn-like-3"><i class="fa fa-globe 3x" aria-hidden="true"></i> Alianzas <span class="input-group-text alianza-'.$imagen.'" style="display:inline!important">'.$checkalianza.'</span></btn>
                        </center></p>';
                      }
                      else{
                        echo'<p><img src="assets/img/coin.png" style="width:15px"> '.$educacoins.' EDUCACOINS conseguidos</p>
                          <p><button type="button" class="btn btn-like-1"></btn><i class="fa fa-lightbulb-o 3x" aria-hidden="true"></i> Innovación <span class="input-group-text" style="display:inline!important">'.$checkinova.'</span>
                          <button type="button" class="btn btn-like-2"><i class="fa fa-heart 3x" aria-hidden="true"></i> Empatia <span class="input-group-text" style="display:inline!important">'.$checkempatia.'</span></btn>
                          <button type="button" class="btn btn-like-3"><i class="fa fa-globe 3x" aria-hidden="true"></i> Alianzas <span class="input-group-text" style="display:inline!important">'.$checkalianza.'</span></btn>
                        </center></p>';
                      }

                      echo'<br>
                    <p style="font-size:1.1rem;"><b>Objetivo:</b> '.$objetivo.'</p>
                    <p style="font-size:1.1rem;"><b>Justificación de la problemática o necesidad que atiende el emprendimiento:</b> '.$problema.'</p>
                    <p style="font-size:1.1rem;"><b>Descripción del emprendimiento:</b> '.$descripcion.'</p>
                    <p>Escuela: '.$escuela.'<br>Nivel Educativo: '.$niveli.'<br>Grado: '.$grado.'°<br>Tipo de Emprendimiento: '.$tipo.'<br>Etapa: '.$etapa.'<br>Integrantes del emprendimiento: '.$integrantes.'</p>
                    
         </div>            
                </div>
            </div>
        </div>';
}
}
if (@$_GET['pabellon'] == 2) {
        $categoria = $_POST['h1'];
        $tipo = $_POST['h2'];
        $etapa = $_POST['h3'];
        $modal = 0;
        echo'<div class="container">
        <div class="col-lg-12">
        <form action="emprebusca.php?busqueda=1" method="POST" style="display:flex;">
        <div class="col-md-3">
        <select class="browser-default custom-select" id="s1" name="s1">
          <option value="">Seleccione el Pabellón</option>
          <option value="1">Pabellón General</option>
          <option value="2" selected>Pabellón Medio Ambiente</option>
          <option value="3">Pabellón Tecnología</option>
          <option value="4">Pabellón AlquiLab</option>

        </select> 
        </div>
        <div class="col-md-3">
          <select class="browser-default custom-select" id="s2" name="s2">
          <option value="" ' . ($categoria == '' ? 'selected' : ''). '>Seleccione la categoría</option>
          <option value="1" ' . ($categoria == '1' ? 'selected' : ''). '>Primaria</option>
          <option value="2" ' . ($categoria == '2' ? 'selected' : ''). '>Secundaria</option>
          <option value="3" ' . ($categoria == '3' ? 'selected' : ''). '>Media Superior</option>
          </select> 
        </div>
        <div class="col-md-3">
       <select class="browser-default custom-select" id="s3" name="s3">
        <option value="" ' . ($tipo == '' ? 'selected' : ''). '>Seleccione el tipo</option>
        <option value="1" ' . ($tipo == '1' ? 'selected' : ''). '>Social</option>
        <option value="2" ' . ($tipo == '2' ? 'selected' : ''). '>Financiero</option>
        </select>
        </div>
        <div class="col-md-3">
        <button type="submit" class="btn btn-primary">Buscar</btn>
        </div>
        </form>
        </div>
        </div>'; 
        echo'<div class="row">';
        if ($categoria!='' && $tipo!='' && $etapa!=''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=2 and tipo_categoria=$categoria and tipo=$tipo and tipo_etapa=$etapa ORDER BY nombre") or die('Error al mostrar resultados de emprendimientos');
        }
         else if($categoria!='' && $tipo=='' && $etapa==''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=2 and tipo_categoria=$categoria ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else if($categoria=='' && $tipo!='' && $etapa==''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=2 and tipo=$tipo ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else if($categoria=='' && $tipo=='' && $etapa!=''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=2 and tipo_etapa=$etapa ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else if($categoria!='' && $tipo!='' && $etapa==''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=2 and tipo_categoria=$categoria and tipo=$tipo ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else if($categoria!='' && $tipo=='' && $etapa!=''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=2 and tipo_categoria=$categoria and $ipo_etapa=$etapa ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else if($categoria=='' && $tipo!='' && $etapa!=''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=2 and tipo=$tipo and tipo_etapa=$etapa ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else{
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=2 ORDER BY RAND()") or die('Error al mostrar resultados');
       
        }
        if($registros=mysqli_num_rows($busqueda)==0){
          echo'<br><p> No existen emprendimientos que coincidan con su búsqueda. Intente buscar de nuevo </p>';
        }
        while ($row = mysqli_fetch_array($busqueda)) {
        $modal=$modal+1;
        $nombre   = $row['nombre'];
        $objetivo = $row['Objetivo'];
        $imagen = $row['id'];
        $datos = mysqli_query($con, "SELECT * FROM `Emprendimientos` where id=$imagen") or die('Error al mostrar datos');
        $datosi = mysqli_fetch_array($datos);
        $nivel = $datosi['tipo_categoria'];
        $grado = $datosi['grado'];
        $tipo = $datosi['tipo_plataforma'];
        $etapa1 = $datosi['tipo_etapa'];
        $problema = $datosi['problema'];
        $descripcion = $datosi['descripcion'];
        $integrantes = $datosi['integrantes'];
        $escuela = $datosi['escuela'];
        $buscanivel = mysqli_query($con, "SELECT nivel FROM `CTLGO_CATEGORIA` where id=$nivel") or die('Error al mostrar datos');
        $nivelda = mysqli_fetch_array($buscanivel);
        $niveli = $nivelda['nivel'];
        $buscaetapa = mysqli_query($con, "SELECT etapa FROM `CTLGO_ETAPA` where id=$etapa1") or die('Error al mostrar datos');
        $etapad = mysqli_fetch_array($buscaetapa);
        $etapa = $etapad['etapa'];


        echo'
<div class="emprende">        
  <center><img src="assets/img/logos/'.$imagen.'.png" alt="Avatar" class="image" class="img-fluid"></center>
  <div class="middle">
    <div class="text">
      <h2><a href="#" data-toggle="modal" data-target="#modal'.$modal.'">'.$nombre.'</a></h2>
              <!--<div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>-->
              <p>'.$objetivo.'</p>
              <a href="#" data-toggle="modal" data-target="#modal'.$modal.'"><i style="color:#000;" class="fa fa-eye 2x"> Ver</i></a>
    </div>
  </div>
  <button type="button" class="btn btn-primary btn-emprende" data-toggle="modal" data-target="#modal'.$modal.'">'.$nombre.'</btn>
</div>

<!-- Modal Emprendimiento-->
        <div class="portfolio-modal modal fade" id="modal'.$modal.'" tabindex="-1" role="dialog" aria-labelledby=""modal'.$modal.'"" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times 2x"></i></span>
                    </button>
                    <div class="modal-header">
        <center><h2 class="modal-title" id="titulo" style="color:#2F488C !important;text-align: center !important">'.$nombre.'</h2></center>
        </div>
                     <div class="modal-body">
                     ';if($namei==''){
                        echo '<p><a class="register" href="registro.php" data-toggle="modal" data-target="#register" data-dismiss="modal">Regístrate</a> o <a class="inicia" href="login.php" data-toggle="modal" data-target="#inicia" data-dismiss="modal">inicia sesión </a> para regalar insignias a este emprendimiento</p><br>';                        }
                        $checainova=mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento=$imagen and insignia=1") or die ("Error de conexion");
                        $checkinova=mysqli_num_rows($checainova);
                        $checaempatia=mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento=$imagen and insignia=2") or die ("Error de conexion");
                        $checkempatia=mysqli_num_rows($checaempatia);
                        $checalianza=mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento=$imagen and insignia=3") or die ("Error de conexion");
                        $checkalianza=mysqli_num_rows($checalianza);
                        $suma=mysqli_query($con,"SELECT SUM(puntos) FROM INSIGNIAS where id_emprendimiento=$imagen");
                        $coins=mysqli_fetch_array($suma);
                        $educacoins=$coins['SUM(puntos)'];
                        if($educacoins==""){
                          $educacoins=0;
                        }
                        echo'
                        <center><img src="assets/img/logos/'.$imagen.'.png" style="width:30%">';
                        if($namei!=''){
                        echo'<p><img src="assets/img/coin.png" style="width:15px"><span class="coin-'.$imagen.'"> '.$educacoins.'</span> EDUCACOINS conseguidos</p>
                          <p><button onclick="inova(this);" data-id="'.$imagen.'" data-email="'.$email.'" type="button" class="btn btn-like-1"></btn><i class="fa fa-lightbulb-o 3x" aria-hidden="true"></i> Innovación <span class="input-group-text inova-'.$imagen.'" style="display:inline!important">'.$checkinova.'</span>
                          <button onclick="empatia(this);" data-id="'.$imagen.'" data-email="'.$email.'" type="button" class="btn btn-like-2"><i class="fa fa-heart 3x" aria-hidden="true"></i> Empatia <span class="input-group-text empatia-'.$imagen.'" style="display:inline!important">'.$checkempatia.'</span></btn>
                          <button onclick="alianza(this);" data-id="'.$imagen.'" data-email="'.$email.'" type="button" class="btn btn-like-3"><i class="fa fa-globe 3x" aria-hidden="true"></i> Alianzas <span class="input-group-text alianza-'.$imagen.'" style="display:inline!important">'.$checkalianza.'</span></btn>
                        </center></p>';
                      }
                      else{
                        echo'<p><img src="assets/img/coin.png" style="width:15px"> '.$educacoins.' EDUCACOINS conseguidos</p>
                          <p><button type="button" class="btn btn-like-1"></btn><i class="fa fa-lightbulb-o 3x" aria-hidden="true"></i> Innovación <span class="input-group-text" style="display:inline!important">'.$checkinova.'</span>
                          <button type="button" class="btn btn-like-2"><i class="fa fa-heart 3x" aria-hidden="true"></i> Empatia <span class="input-group-text" style="display:inline!important">'.$checkempatia.'</span></btn>
                          <button type="button" class="btn btn-like-3"><i class="fa fa-globe 3x" aria-hidden="true"></i> Alianzas <span class="input-group-text" style="display:inline!important">'.$checkalianza.'</span></btn>
                        </center></p>';
                      }

                      echo'

                      <br>
                    <p style="font-size:1.1rem;"><b>Objetivo:</b> '.$objetivo.'</p>
                    <p style="font-size:1.1rem;"><b>Justificación de la problemática o necesidad que atiende el emprendimiento:</b> '.$problema.'</p>
                    <p style="font-size:1.1rem;"><b>Descripción del emprendimiento:</b> '.$descripcion.'</p>
                    <p>Escuela: '.$escuela.'<br>Nivel Educativo: '.$niveli.'<br>Grado: '.$grado.'°<br>Tipo de Emprendimiento: '.$tipo.'<br>Etapa: '.$etapa.'<br>Integrantes del emprendimiento: '.$integrantes.'</p>
                    
         </div>            
                </div>
            </div>
        </div>';
}
}
if (@$_GET['pabellon'] == 3) {
        $categoria = $_POST['i1'];
        $tipo = $_POST['i2'];
        $etapa = $_POST['i3'];
          $modal = 0;
          echo'<div class="container">
        <div class="col-lg-12">
        <form action="emprebusca.php?busqueda=1" method="POST" style="display:flex;">
        <div class="col-md-3">
        <select class="browser-default custom-select" id="s1" name="s1">
          <option value="">Seleccione el Pabellón</option>
          <option value="1">Pabellón General</option>
          <option value="2">Pabellón Medio Ambiente</option>
          <option value="3" selected>Pabellón Tecnología</option>
          <option value="4">Pabellón AlquiLab</option>

        </select> 
        </div>
        <div class="col-md-3">
          <select class="browser-default custom-select" id="s2" name="s2">
          <option value="" ' . ($categoria == '' ? 'selected' : ''). '>Seleccione la categoría</option>
          <option value="1" ' . ($categoria == '1' ? 'selected' : ''). '>Primaria</option>
          <option value="2" ' . ($categoria == '2' ? 'selected' : ''). '>Secundaria</option>
          <option value="3" ' . ($categoria == '3' ? 'selected' : ''). '>Media Superior</option>
          </select> 
        </div>
        <div class="col-md-3">
       <select class="browser-default custom-select" id="s3" name="s3">
        <option value="" ' . ($tipo == '' ? 'selected' : ''). '>Seleccione el tipo</option>
        <option value="1" ' . ($tipo == '1' ? 'selected' : ''). '>Social</option>
        <option value="2" ' . ($tipo == '2' ? 'selected' : ''). '>Financiero</option>
        </select>
        </div>
        <div class="col-md-3">
        <button type="submit" class="btn btn-primary">Buscar</btn>
        </div>
        </form>
        </div>
        </div>'; 
        echo'<div class="row">';
        if ($categoria!='' && $tipo!='' && $etapa!=''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=3 and tipo_categoria=$categoria and tipo=$tipo and tipo_etapa=$etapa ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');
          }
        else if($categoria!='' && $tipo=='' && $etapa==''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=3 and tipo_categoria=$categoria ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else if($categoria=='' && $tipo!='' && $etapa==''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=3 and tipo=$tipo ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else if($categoria=='' && $tipo=='' && $etapa!=''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=3 and tipo_etapa=$etapa ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else if($categoria!='' && $tipo!='' && $etapa==''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=3 and tipo_categoria=$categoria and tipo=$tipo ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else if($categoria!='' && $tipo=='' && $etapa!=''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=3 and tipo_categoria=$categoria and $ipo_etapa=$etapa ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else if($categoria=='' && $tipo!='' && $etapa!=''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=3 and tipo=$tipo and tipo_etapa=$etapa ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else{
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=3 ORDER BY RAND()") or die('Error al mostrar resultados');
        }
        if($registros=mysqli_num_rows($busqueda)==0){
          echo'<br><p> No existen emprendimientos que coincidan con su búsqueda. Intente buscar de nuevo </p>';
        }
        while ($row = mysqli_fetch_array($busqueda)) {
        $modal=$modal+1;
        $nombre   = $row['nombre'];
        $objetivo = $row['Objetivo'];
        $imagen = $row['id'];
        $datos = mysqli_query($con, "SELECT * FROM `Emprendimientos` where id=$imagen") or die('Error al mostrar datos');
        $datosi = mysqli_fetch_array($datos);
        $nivel = $datosi['tipo_categoria'];
        $grado = $datosi['grado'];
        $tipo = $datosi['tipo_plataforma'];
        $etapa1 = $datosi['tipo_etapa'];
        $problema = $datosi['problema'];
        $descripcion = $datosi['descripcion'];
        $integrantes = $datosi['integrantes'];
        $escuela = $datosi['escuela'];
        $buscanivel = mysqli_query($con, "SELECT nivel FROM `CTLGO_CATEGORIA` where id=$nivel") or die('Error al mostrar datos');
        $nivelda = mysqli_fetch_array($buscanivel);
        $niveli = $nivelda['nivel'];
        $buscaetapa = mysqli_query($con, "SELECT etapa FROM `CTLGO_ETAPA` where id=$etapa1") or die('Error al mostrar datos');
        $etapad = mysqli_fetch_array($buscaetapa);
        $etapa = $etapad['etapa'];


        echo'
<div class="emprende">        
  <center><img src="assets/img/logos/'.$imagen.'.png" alt="Avatar" class="image" class="img-fluid"></center>
  <div class="middle">
    <div class="text">
      <h2><a href="#" data-toggle="modal" data-target="#modal'.$modal.'">'.$nombre.'</a></h2>
              <!--<div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>-->
              ';if($imagen==17){
                echo '<p>'.$descripcion.'</p>';
              }else{echo'
      <p>'.$objetivo.'</p>';}
              echo'<a href="#" data-toggle="modal" data-target="#modal'.$modal.'"><i style="color:#000;" class="fa fa-eye 2x"> Ver</i></a>
    </div>
  </div>
  <button type="button" class="btn btn-primary btn-emprende" data-toggle="modal" data-target="#modal'.$modal.'">'.$nombre.'</btn>
</div>

<!-- Modal Emprendimiento-->
        <div class="portfolio-modal modal fade" id="modal'.$modal.'" tabindex="-1" role="dialog" aria-labelledby=""modal'.$modal.'"" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times 2x"></i></span>
                    </button>
                    <div class="modal-header">
        <center><h2 class="modal-title" id="titulo" style="color:#2F488C !important;text-align: center !important">'.$nombre.'</h2></center>
        </div>
                     <div class="modal-body">
                     ';if($namei==''){
echo '<p><a class="register" href="registro.php" data-toggle="modal" data-target="#register" data-dismiss="modal">Regístrate</a> o <a class="inicia" href="login.php" data-toggle="modal" data-target="#inicia" data-dismiss="modal">inicia sesión </a> para regalar insignias a este emprendimiento</p><br>';                        }
                        $checainova=mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento=$imagen and insignia=1") or die ("Error de conexion");
                        $checkinova=mysqli_num_rows($checainova);
                        $checaempatia=mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento=$imagen and insignia=2") or die ("Error de conexion");
                        $checkempatia=mysqli_num_rows($checaempatia);
                        $checalianza=mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento=$imagen and insignia=3") or die ("Error de conexion");
                        $checkalianza=mysqli_num_rows($checalianza);
                          $suma=mysqli_query($con,"SELECT SUM(puntos) FROM INSIGNIAS where id_emprendimiento=$imagen");
                        $coins=mysqli_fetch_array($suma);
                        $educacoins=$coins['SUM(puntos)'];
                        if($educacoins==""){
                          $educacoins=0;
                        }
                        echo'
                        <center><img src="assets/img/logos/'.$imagen.'.png" style="width:30%">';
                        if($namei!=''){
                        echo'<p><img src="assets/img/coin.png" style="width:15px"><span class="coin-'.$imagen.'"> '.$educacoins.'</span> EDUCACOINS conseguidos</p>
                          <p><button onclick="inova(this);" data-id="'.$imagen.'" data-email="'.$email.'" type="button" class="btn btn-like-1"></btn><i class="fa fa-lightbulb-o 3x" aria-hidden="true"></i> Innovación <span class="input-group-text inova-'.$imagen.'" style="display:inline!important">'.$checkinova.'</span>
                          <button onclick="empatia(this);" data-id="'.$imagen.'" data-email="'.$email.'" type="button" class="btn btn-like-2"><i class="fa fa-heart 3x" aria-hidden="true"></i> Empatia <span class="input-group-text empatia-'.$imagen.'" style="display:inline!important">'.$checkempatia.'</span></btn>
                          <button onclick="alianza(this);" data-id="'.$imagen.'" data-email="'.$email.'" type="button" class="btn btn-like-3"><i class="fa fa-globe 3x" aria-hidden="true"></i> Alianzas <span class="input-group-text alianza-'.$imagen.'" style="display:inline!important">'.$checkalianza.'</span></btn>
                        </center></p>';
                      }
                      else{
                        echo'<p><img src="assets/img/coin.png" style="width:15px"> '.$educacoins.' EDUCACOINS conseguidos</p>
                          <p><button type="button" class="btn btn-like-1"></btn><i class="fa fa-lightbulb-o 3x" aria-hidden="true"></i> Innovación <span class="input-group-text" style="display:inline!important">'.$checkinova.'</span>
                          <button type="button" class="btn btn-like-2"><i class="fa fa-heart 3x" aria-hidden="true"></i> Empatia <span class="input-group-text" style="display:inline!important">'.$checkempatia.'</span></btn>
                          <button type="button" class="btn btn-like-3"><i class="fa fa-globe 3x" aria-hidden="true"></i> Alianzas <span class="input-group-text" style="display:inline!important">'.$checkalianza.'</span></btn>
                        </center></p>';
                      }

                      echo'
                      
                    <br>
                    <p style="font-size:1.1rem;"><b>Objetivo:</b> '.$objetivo.'</p>
                    <p style="font-size:1.1rem;"><b>Justificación de la problemática o necesidad que atiende el emprendimiento:</b> '.$problema.'</p>
                    <p style="font-size:1.1rem;"><b>Descripción del emprendimiento:</b> '.$descripcion.'</p>
                    <p>Escuela: '.$escuela.'<br>Nivel Educativo: '.$niveli.'<br>Grado: '.$grado.'°<br>Tipo de Emprendimiento: '.$tipo.'<br>Etapa: '.$etapa.'<br>Integrantes del emprendimiento: '.$integrantes.'</p>
                    
         </div>            
                </div>
            </div>
        </div>';
}
}
if (@$_GET['pabellon'] == 4) {
        $categoria = $_POST['a1'];
        $tipo = $_POST['a2'];
        $modal = 0;
        echo'<div class="container">
        <div class="col-lg-12">
        <form action="emprebusca.php?busqueda=1" method="POST" style="display:flex;">
        <div class="col-md-3">
        <select class="browser-default custom-select" id="s1" name="s1">
          <option value="">Seleccione el Pabellón</option>
          <option value="1">Pabellón General</option>
          <option value="2">Pabellón Medio Ambiente</option>
          <option value="3">Pabellón Tecnología</option>
          <option value="4" selected>Pabellón AlquiLab</option>

        </select> 
        </div>
        <div class="col-md-3">
          <select class="browser-default custom-select" id="s2" name="s2">
          <option value="" ' . ($categoria == '' ? 'selected' : ''). '>Seleccione la categoría</option>
          <option value="1" ' . ($categoria == '1' ? 'selected' : ''). '>Primaria</option>
          <option value="2" ' . ($categoria == '2' ? 'selected' : ''). '>Secundaria</option>
          <option value="3" ' . ($categoria == '3' ? 'selected' : ''). '>Media Superior</option>
          </select> 
        </div>
        <div class="col-md-3">
       <select class="browser-default custom-select" id="s3" name="s3">
        <option value="" ' . ($tipo == '' ? 'selected' : ''). '>Seleccione el tipo</option>
        <option value="1" ' . ($tipo == '1' ? 'selected' : ''). '>Social</option>
        <option value="2" ' . ($tipo == '2' ? 'selected' : ''). '>Financiero</option>
        </select>
        </div>
        <div class="col-md-3">
        <button type="submit" class="btn btn-primary">Buscar</btn>
        </div>
        </form>
        </div>
        </div>'; 
        echo'<div class="row">';
        if ($categoria!='' && $tipo!=''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=4 and tipo_categoria=$categoria and tipo=$tipo ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');
        }
        else if($categoria!='' && $tipo==''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=4 and tipo_categoria=$categoria ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else if($categoria=='' && $tipo!=''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=4 and tipo=$tipo ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');      
        }
        else{
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=4 ORDER BY RAND()") or die('Error al mostrar resultados');
        }
        if($registros=mysqli_num_rows($busqueda)==0){
          echo'<br><p> No existen emprendimientos que coincidan con su búsqueda. Intente buscar de nuevo </p>';
        }
        while ($row = mysqli_fetch_array($busqueda)) {
        $modal=$modal+1;
        $nombre   = $row['nombre'];
        $objetivo = $row['Objetivo'];
        $imagen = $row['id'];
        $datos = mysqli_query($con, "SELECT * FROM `Emprendimientos` where id=$imagen") or die('Error al mostrar datos');
        $datosi = mysqli_fetch_array($datos);
        $nivel = $datosi['tipo_categoria'];
        $grado = $datosi['grado'];
        $tipo = $datosi['tipo_plataforma'];
        $etapa1 = $datosi['tipo_etapa'];
        $problema = $datosi['problema'];
        $descripcion = $datosi['descripcion'];
        $integrantes = $datosi['integrantes'];
        $escuela = $datosi['escuela'];
        $buscanivel = mysqli_query($con, "SELECT nivel FROM `CTLGO_CATEGORIA` where id=$nivel") or die('Error al mostrar datos');
        $nivelda = mysqli_fetch_array($buscanivel);
        $niveli = $nivelda['nivel'];
        $buscaetapa = mysqli_query($con, "SELECT etapa FROM `CTLGO_ETAPA` where id=$etapa1") or die('Error al mostrar datos');
        $etapad = mysqli_fetch_array($buscaetapa);
        $etapa = $etapad['etapa'];


        echo'
<div class="emprende">        
  <center><img src="assets/img/logos/'.$imagen.'.png" alt="Avatar" class="image" class="img-fluid"></center>
  <div class="middle">
    <div class="text">
      <h2><a href="#" data-toggle="modal" data-target="#modal'.$modal.'">'.$nombre.'</a></h2>
              <!--<div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>-->
              <p>'.$objetivo.'</p>
              <a href="#" data-toggle="modal" data-target="#modal'.$modal.'"><i style="color:#000;" class="fa fa-eye 2x"> Ver</i></a>
    </div>
  </div>
  <button type="button" class="btn btn-primary btn-emprende" data-toggle="modal" data-target="#modal'.$modal.'">'.$nombre.'</btn>
</div>

<!-- Modal Emprendimiento-->
        <div class="portfolio-modal modal fade" id="modal'.$modal.'" tabindex="-1" role="dialog" aria-labelledby=""modal'.$modal.'"" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times 2x"></i></span>
                    </button>
                    <div class="modal-header">
        <center><h2 class="modal-title" id="titulo" style="color:#2F488C !important;text-align: center !important">'.$nombre.'</h2></center>
        </div>
                     <div class="modal-body">';
                     if($namei==''){
echo '<p><a class="register" href="registro.php" data-toggle="modal" data-target="#register" data-dismiss="modal">Regístrate</a> o <a class="inicia" href="login.php" data-toggle="modal" data-target="#inicia" data-dismiss="modal">inicia sesión </a> para regalar insignias a este emprendimiento</p><br>';                        }
                        $checainova=mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento=$imagen and insignia=1") or die ("Error de conexion");
                        $checkinova=mysqli_num_rows($checainova);
                        $checaempatia=mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento=$imagen and insignia=2") or die ("Error de conexion");
                        $checkempatia=mysqli_num_rows($checaempatia);
                        $checalianza=mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento=$imagen and insignia=3") or die ("Error de conexion");
                        $checkalianza=mysqli_num_rows($checalianza);
                           $suma=mysqli_query($con,"SELECT SUM(puntos) FROM INSIGNIAS where id_emprendimiento=$imagen");
                        $coins=mysqli_fetch_array($suma);
                        $educacoins=$coins['SUM(puntos)'];
                        if($educacoins==""){
                          $educacoins=0;
                        }
                        echo'
                        <center><img src="assets/img/logos/'.$imagen.'.png" style="width:30%">';
                        if($namei!=''){
                        echo'<p><img src="assets/img/coin.png" style="width:15px"><span class="coin-'.$imagen.'"> '.$educacoins.'</span> EDUCACOINS conseguidos</p>
                          <p><button onclick="inova(this);" data-id="'.$imagen.'" data-email="'.$email.'" type="button" class="btn btn-like-1"></btn><i class="fa fa-lightbulb-o 3x" aria-hidden="true"></i> Innovación <span class="input-group-text inova-'.$imagen.'" style="display:inline!important">'.$checkinova.'</span>
                          <button onclick="empatia(this);" data-id="'.$imagen.'" data-email="'.$email.'" type="button" class="btn btn-like-2"><i class="fa fa-heart 3x" aria-hidden="true"></i> Empatia <span class="input-group-text empatia-'.$imagen.'" style="display:inline!important">'.$checkempatia.'</span></btn>
                          <button onclick="alianza(this);" data-id="'.$imagen.'" data-email="'.$email.'" type="button" class="btn btn-like-3"><i class="fa fa-globe 3x" aria-hidden="true"></i> Alianzas <span class="input-group-text alianza-'.$imagen.'" style="display:inline!important">'.$checkalianza.'</span></btn>
                        </center></p>';
                      }
                      else{
                        echo'<p><img src="assets/img/coin.png" style="width:15px"> '.$educacoins.' EDUCACOINS conseguidos</p>
                          <p><button type="button" class="btn btn-like-1"></btn><i class="fa fa-lightbulb-o 3x" aria-hidden="true"></i> Innovación <span class="input-group-text" style="display:inline!important">'.$checkinova.'</span>
                          <button type="button" class="btn btn-like-2"><i class="fa fa-heart 3x" aria-hidden="true"></i> Empatia <span class="input-group-text" style="display:inline!important">'.$checkempatia.'</span></btn>
                          <button type="button" class="btn btn-like-3"><i class="fa fa-globe 3x" aria-hidden="true"></i> Alianzas <span class="input-group-text" style="display:inline!important">'.$checkalianza.'</span></btn>
                        </center></p>';
                      }

                      echo'
                      <br>
                    <p style="font-size:1.1rem;"><b>Objetivo:</b> '.$objetivo.'</p>
                    <p style="font-size:1.1rem;"><b>Justificación de la problemática o necesidad que atiende el emprendimiento:</b> '.$problema.'</p>
                    <p style="font-size:1.1rem;"><b>Descripción del emprendimiento:</b> '.$descripcion.'</p>
                    <p>Escuela: '.$escuela.'<br>Nivel Educativo: '.$niveli.'<br>Grado: '.$grado.'°<br>Tipo de Emprendimiento: '.$tipo.'<br>Etapa: '.$etapa.'<br>Integrantes del emprendimiento: '.$integrantes.'</p>
                    
         </div>            
                </div>
            </div>
        </div>';
}
}

if (@$_GET['allentrepreneurs'] == 1) {
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` ORDER BY RAND()") or die('Error al mostrar resultados');
       echo'<div class="container">
        <div class="col-lg-12">
        <form action="emprebusca.php?busqueda=1" method="POST" style="display:flex;">
        <div class="col-md-3">
        <select class="browser-default custom-select" id="s1" name="s1">
          <option value="" selected>Seleccione el Pabellón</option>
          <option value="1">Pabellón General</option>
          <option value="2">Pabellón Medio Ambiente</option>
          <option value="3">Pabellón Tecnología</option>
          <option value="4">Pabellón AlquiLab</option>

        </select> 
        </div>
        <div class="col-md-3">
          <select class="browser-default custom-select" id="s2" name="s2">
          <option value="" ' . ($categoria == '' ? 'selected' : ''). '>Seleccione la categoría</option>
          <option value="1" ' . ($categoria == '1' ? 'selected' : ''). '>Primaria</option>
          <option value="2" ' . ($categoria == '2' ? 'selected' : ''). '>Secundaria</option>
          <option value="3" ' . ($categoria == '3' ? 'selected' : ''). '>Media Superior</option>
          </select> 
        </div>
        <div class="col-md-3">
       <select class="browser-default custom-select" id="s3" name="s3">
        <option value="" ' . ($tipo == '' ? 'selected' : ''). '>Seleccione el tipo</option>
        <option value="1" ' . ($tipo == '1' ? 'selected' : ''). '>Social</option>
        <option value="2" ' . ($tipo == '2' ? 'selected' : ''). '>Financiero</option>
        </select>
        </div>
        <div class="col-md-3">
        <button type="submit" class="btn btn-primary">Buscar</btn>
        </div>
        </form>
        </div>
        </div>'; 
        echo'<div class="row">';
        if($registros=mysqli_num_rows($busqueda)==0){
          echo'<br><p> No existen emprendimientos que coincidan con su búsqueda. Intente buscar de nuevo </p>';
        }
        while ($row = mysqli_fetch_array($busqueda)) {
        $modal=$modal+1;
        $nombre   = $row['nombre'];
        $objetivo = $row['Objetivo'];
        $imagen = $row['id'];
        $datos = mysqli_query($con, "SELECT * FROM `Emprendimientos` where id=$imagen") or die('Error al mostrar datos');
        $datosi = mysqli_fetch_array($datos);
        $nivel = $datosi['tipo_categoria'];
        $grado = $datosi['grado'];
        $tipo = $datosi['tipo_plataforma'];
        $etapa1 = $datosi['tipo_etapa'];
        $problema = $datosi['problema'];
        $descripcion = $datosi['descripcion'];
        $integrantes = $datosi['integrantes'];
        $escuela = $datosi['escuela'];
        $buscanivel = mysqli_query($con, "SELECT nivel FROM `CTLGO_CATEGORIA` where id=$nivel") or die('Error al mostrar datos');
        $nivelda = mysqli_fetch_array($buscanivel);
        $niveli = $nivelda['nivel'];
        $buscaetapa = mysqli_query($con, "SELECT etapa FROM `CTLGO_ETAPA` where id=$etapa1") or die('Error al mostrar datos');
        $etapad = mysqli_fetch_array($buscaetapa);
        $etapa = $etapad['etapa'];


        echo'
<div class="emprende">        
  <center><img src="assets/img/logos/'.$imagen.'.png" alt="Avatar" class="image" class="img-fluid"></center>
  <div class="middle">
    <div class="text">
      <h2><a href="#" data-toggle="modal" data-target="#modal'.$modal.'">'.$nombre.'</a></h2>
              <!--<div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>-->
                ';if($imagen==17){
                echo '<p>'.$descripcion.'</p>';
              }else{echo'
      <p>'.$objetivo.'</p>';}
              echo'<a href="#" data-toggle="modal" data-target="#modal'.$modal.'"><i style="color:#000;" class="fa fa-eye 2x"> Ver</i></a>
    </div>
  </div>
  <button type="button" class="btn btn-primary btn-emprende" data-toggle="modal" data-target="#modal'.$modal.'">'.$nombre.'</btn>
</div>

<!-- Modal Emprendimiento-->
        <div class="portfolio-modal modal fade" id="modal'.$modal.'" tabindex="-1" role="dialog" aria-labelledby=""modal'.$modal.'"" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times 2x"></i></span>
                    </button>
                    <div class="modal-header">
        <center><h2 class="modal-title" id="titulo" style="color:#2F488C !important;text-align: center !important">'.$nombre.'</h2></center>
        </div>
                     <div class="modal-body">';if($namei==''){
echo '<p><a class="register" href="registro.php" data-toggle="modal" data-target="#register" data-dismiss="modal">Regístrate</a> o <a class="inicia" href="login.php" data-toggle="modal" data-target="#inicia" data-dismiss="modal">inicia sesión </a> para regalar insignias a este emprendimiento</p><br>';                        }
                        $checainova=mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento=$imagen and insignia=1") or die ("Error de conexion");
                        $checkinova=mysqli_num_rows($checainova);
                        $checaempatia=mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento=$imagen and insignia=2") or die ("Error de conexion");
                        $checkempatia=mysqli_num_rows($checaempatia);
                        $checalianza=mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento=$imagen and insignia=3") or die ("Error de conexion");
                        $checkalianza=mysqli_num_rows($checalianza);
                          $suma=mysqli_query($con,"SELECT SUM(puntos) FROM INSIGNIAS where id_emprendimiento=$imagen");
                        $coins=mysqli_fetch_array($suma);
                        $educacoins=$coins['SUM(puntos)'];
                        if($educacoins==""){
                          $educacoins=0;
                        }
                        echo'
                        <center><img src="assets/img/logos/'.$imagen.'.png" style="width:30%">';
                        if($namei!=''){
                        echo'<p><img src="assets/img/coin.png" style="width:15px"><span class="coin-'.$imagen.'"> '.$educacoins.'</span> EDUCACOINS conseguidos</p>
                          <p><button onclick="inova(this);" data-id="'.$imagen.'" data-email="'.$email.'" type="button" class="btn btn-like-1"></btn><i class="fa fa-lightbulb-o 3x" aria-hidden="true"></i> Innovación <span class="input-group-text inova-'.$imagen.'" style="display:inline!important">'.$checkinova.'</span>
                          <button onclick="empatia(this);" data-id="'.$imagen.'" data-email="'.$email.'" type="button" class="btn btn-like-2"><i class="fa fa-heart 3x" aria-hidden="true"></i> Empatia <span class="input-group-text empatia-'.$imagen.'" style="display:inline!important">'.$checkempatia.'</span></btn>
                          <button onclick="alianza(this);" data-id="'.$imagen.'" data-email="'.$email.'" type="button" class="btn btn-like-3"><i class="fa fa-globe 3x" aria-hidden="true"></i> Alianzas <span class="input-group-text alianza-'.$imagen.'" style="display:inline!important">'.$checkalianza.'</span></btn>
                        </center></p>';
                      }
                      else{
                        echo'<p><img src="assets/img/coin.png" style="width:15px"> '.$educacoins.' EDUCACOINS conseguidos</p>
                          <p><button type="button" class="btn btn-like-1"></btn><i class="fa fa-lightbulb-o 3x" aria-hidden="true"></i> Innovación <span class="input-group-text" style="display:inline!important">'.$checkinova.'</span>
                          <button type="button" class="btn btn-like-2"><i class="fa fa-heart 3x" aria-hidden="true"></i> Empatia <span class="input-group-text" style="display:inline!important">'.$checkempatia.'</span></btn>
                          <button type="button" class="btn btn-like-3"><i class="fa fa-globe 3x" aria-hidden="true"></i> Alianzas <span class="input-group-text" style="display:inline!important">'.$checkalianza.'</span></btn>
                        </center></p>';
                      }

                      echo'
                      
                      <br>
                    <p style="font-size:1.1rem;"><b>Objetivo:</b> '.$objetivo.'</p>
                    <p style="font-size:1.1rem;"><b>Justificación de la problemática o necesidad que atiende el emprendimiento:</b> '.$problema.'</p>
                    <p style="font-size:1.1rem;"><b>Descripción del emprendimiento:</b> '.$descripcion.'</p>
                    <p>Escuela: '.$escuela.'<br>Nivel Educativo: '.$niveli.'<br>Grado: '.$grado.'°<br>Tipo de Emprendimiento: '.$tipo.'<br>Etapa: '.$etapa.'<br>Integrantes del emprendimiento: '.$integrantes.'</p>
                    
         </div>            
                </div>
            </div>
        </div>';
}
}
if (@$_GET['busqueda'] == 1) {
        $pabellon = $_POST['s1'];
        $categoria = $_POST['s2'];
        $tipo = $_POST['s3'];
        $modal = 0;
        echo'<div class="container">
        <div class="col-lg-12">
        <form action="emprebusca.php?busqueda=1" method="POST" style="display:flex;">
        <div class="col-md-3">
        <select class="browser-default custom-select" id="s1" name="s1">
          <option value="" ' . ($pabellon == '' ? 'selected' : ''). '>Seleccione el Pabellón</option>
          <option value="1" ' . ($pabellon == '1' ? 'selected' : ''). '>Pabellón General</option>
          <option value="2" ' . ($pabellon == '2' ? 'selected' : ''). '>Pabellón Medio Ambiente</option>
          <option value="3" ' . ($pabellon == '3' ? 'selected' : ''). '>Pabellón Tecnología</option>
          <option value="4" ' . ($pabellon == '4' ? 'selected' : ''). '>Pabellón AlquiLab</option>

        </select> 
        </div>
        <div class="col-md-3">
          <select class="browser-default custom-select" id="s2" name="s2">
          <option value="" ' . ($categoria == '' ? 'selected' : ''). '>Seleccione la categoría</option>
          <option value="1" ' . ($categoria == '1' ? 'selected' : ''). '>Primaria</option>
          <option value="2" ' . ($categoria == '2' ? 'selected' : ''). '>Secundaria</option>
          <option value="3" ' . ($categoria == '3' ? 'selected' : ''). '>Media Superior</option>
          </select> 
        </div>
        <div class="col-md-3">
       <select class="browser-default custom-select" id="s3" name="s3">
        <option value="" ' . ($tipo == '' ? 'selected' : ''). '>Seleccione el tipo</option>
        <option value="1" ' . ($tipo == '1' ? 'selected' : ''). '>Social</option>
        <option value="2" ' . ($tipo == '2' ? 'selected' : ''). '>Financiero</option>
        </select>
        </div>
        <div class="col-md-3">
        <button type="submit" class="btn btn-primary">Buscar</btn>
        </div>
        </form>
        </div>
        </div>'; 
        echo'<div class="row">';
        if ($pabellon!='' && $categoria!='' && $tipo!=''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=$pabellon and tipo_categoria=$categoria and tipo=$tipo ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');
        }
        else if($pabellon!='' && $categoria=='' && $tipo==''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=$pabellon ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');
        }
        else if($pabellon=='' && $categoria!='' && $tipo==''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_categoria=$categoria ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');
        }
        else if($pabellon=='' && $categoria=='' && $tipo!=''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo=$tipo ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');
        }
        else if($pabellon!='' && $categoria!='' && $tipo==''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=$pabellon and tipo_categoria=$categoria ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');
        }
        else if($pabellon!='' && $categoria=='' && $tipo!=''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo_pabellon=$pabellon and tipo=$tipo ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');
        }
        else if($pabellon=='' && $categoria!='' && $tipo!=''){
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` where tipo=$tipo and tipo_categoria=$categoria ORDER BY RAND()") or die('Error al mostrar resultados de emprendimientos');
        }
        else{
        $busqueda = mysqli_query($con, "SELECT * FROM `Emprendimientos` ORDER BY RAND()") or die('Error al mostrar resultados');
        }
        if($registros=mysqli_num_rows($busqueda)==0){
          echo'<br><p> No existen emprendimientos que coincidan con su búsqueda. Intente buscar de nuevo </p>';
        }
        while ($row = mysqli_fetch_array($busqueda)) {
        $modal=$modal+1;
        $nombre   = $row['nombre'];
        $objetivo = $row['Objetivo'];
        $imagen = $row['id'];
        $datos = mysqli_query($con, "SELECT * FROM `Emprendimientos` where id=$imagen") or die('Error al mostrar datos');
        $datosi = mysqli_fetch_array($datos);
        $nivel = $datosi['tipo_categoria'];
        $grado = $datosi['grado'];
        $tipo = $datosi['tipo_plataforma'];
        $etapa1 = $datosi['tipo_etapa'];
        $problema = $datosi['problema'];
        $descripcion = $datosi['descripcion'];
        $integrantes = $datosi['integrantes'];
        $escuela = $datosi['escuela'];
        $buscanivel = mysqli_query($con, "SELECT nivel FROM `CTLGO_CATEGORIA` where id=$nivel") or die('Error al mostrar datos');
        $nivelda = mysqli_fetch_array($buscanivel);
        $niveli = $nivelda['nivel'];
        $buscaetapa = mysqli_query($con, "SELECT etapa FROM `CTLGO_ETAPA` where id=$etapa1") or die('Error al mostrar datos');
        $etapad = mysqli_fetch_array($buscaetapa);
        $etapa = $etapad['etapa'];


        echo'
<div class="emprende">        
  <center><img src="assets/img/logos/'.$imagen.'.png" alt="Avatar" class="image" class="img-fluid"></center>
  <div class="middle">
    <div class="text">
      <h2><a href="#" data-toggle="modal" data-target="#modal'.$modal.'">'.$nombre.'</a></h2>
              <!--<div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>-->
                ';if($imagen==17){
                echo '<p>'.$descripcion.'</p>';
              }else{echo'
      <p>'.$objetivo.'</p>';}
              echo'<a href="#" data-toggle="modal" data-target="#modal'.$modal.'"><i style="color:#000;" class="fa fa-eye 2x"> Ver</i></a>
    </div>
  </div>
  <button type="button" class="btn btn-primary btn-emprende" data-toggle="modal" data-target="#modal'.$modal.'">'.$nombre.'</btn>
</div>

<!-- Modal Emprendimiento-->
        <div class="portfolio-modal modal fade" id="modal'.$modal.'" tabindex="-1" role="dialog" aria-labelledby=""modal'.$modal.'"" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times 2x"></i></span>
                    </button>
                    <div class="modal-header">
        <center><h2 class="modal-title" id="titulo" style="color:#2F488C !important;text-align: center !important">'.$nombre.'</h2></center>
        </div>
                     <div class="modal-body">
                     ';if($namei==''){
echo '<p><a class="register" href="registro.php" data-toggle="modal" data-target="#register" data-dismiss="modal">Regístrate</a> o <a class="inicia" href="login.php" data-toggle="modal" data-target="#inicia" data-dismiss="modal">inicia sesión </a> para regalar insignias a este emprendimiento</p><br>';                        }
                        $checainova=mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento=$imagen and insignia=1") or die ("Error de conexion");
                        $checkinova=mysqli_num_rows($checainova);
                        $checaempatia=mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento=$imagen and insignia=2") or die ("Error de conexion");
                        $checkempatia=mysqli_num_rows($checaempatia);
                        $checalianza=mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento=$imagen and insignia=3") or die ("Error de conexion");
                        $checkalianza=mysqli_num_rows($checalianza);
                        $suma=mysqli_query($con,"SELECT SUM(puntos) FROM INSIGNIAS where id_emprendimiento=$imagen");
                        $coins=mysqli_fetch_array($suma);
                        $educacoins=$coins['SUM(puntos)'];
                        if($educacoins==""){
                          $educacoins=0;
                        }
                        echo'
                        <center><img src="assets/img/logos/'.$imagen.'.png" style="width:30%">';
                        if($namei!=''){
                        echo'<p><img src="assets/img/coin.png" style="width:15px"><span class="coin-'.$imagen.'"> '.$educacoins.'</span> EDUCACOINS conseguidos</p>
                          <p><button onclick="inova(this);" data-id="'.$imagen.'" data-email="'.$email.'" type="button" class="btn btn-like-1 focus1"></btn><i class="fa fa-lightbulb-o 3x" aria-hidden="true"></i> Innovación <span class="input-group-text inova-'.$imagen.'" style="display:inline!important">'.$checkinova.'</span>
                          <button onclick="empatia(this);" data-id="'.$imagen.'" data-email="'.$email.'" type="button" class="btn btn-like-2"><i class="fa fa-heart 3x" aria-hidden="true"></i> Empatia <span class="input-group-text empatia-'.$imagen.'" style="display:inline!important">'.$checkempatia.'</span></btn>
                          <button onclick="alianza(this);" data-id="'.$imagen.'" data-email="'.$email.'" type="button" class="btn btn-like-3"><i class="fa fa-globe 3x" aria-hidden="true"></i> Alianzas <span class="input-group-text alianza-'.$imagen.'" style="display:inline!important">'.$checkalianza.'</span></btn>
                        </center></p>';
                      }
                      else{
                        echo'<p><img src="assets/img/coin.png" style="width:15px"> '.$educacoins.' EDUCACOINS conseguidos</p>
                          <p><button type="button" class="btn btn-like-1"></btn><i class="fa fa-lightbulb-o 3x" aria-hidden="true"></i> Innovación <span class="input-group-text" style="display:inline!important">'.$checkinova.'</span>
                          <button type="button" class="btn btn-like-2"><i class="fa fa-heart 3x" aria-hidden="true"></i> Empatia <span class="input-group-text" style="display:inline!important">'.$checkempatia.'</span></btn>
                          <button type="button" class="btn btn-like-3"><i class="fa fa-globe 3x" aria-hidden="true"></i> Alianzas <span class="input-group-text" style="display:inline!important">'.$checkalianza.'</span></btn>
                        </center></p>';
                      }

                      echo'
                      <br>
                    <p style="font-size:1.1rem;"><b>Objetivo:</b> '.$objetivo.'</p>
                    <p style="font-size:1.1rem;"><b>Justificación de la problemática o necesidad que atiende el emprendimiento:</b> '.$problema.'</p>
                    <p style="font-size:1.1rem;"><b>Descripción del emprendimiento:</b> '.$descripcion.'</p>
                    <p>Escuela: '.$escuela.' <br>Nivel Educativo: '.$niveli.'<br>Grado: '.$grado.'°<br>Tipo de Emprendimiento: '.$tipo.'<br>Etapa: '.$etapa.'<br>Integrantes del emprendimiento: '.$integrantes.'</p>
                    
         </div>            
                </div>
            </div>
        </div>';

        
}
}
?>


                    </div>
            </div>

               
        </section>
        

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-9 col-md-6 footer-info">
            <img class="img-fluid" src="assets/img/LOGO-FERIA.png" alt="Feria EDUCA, Ahorra y Emprende">
            <p></p>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact float-right">
            <h4>Fundación Educa México A.C.</h4>
            <p>
              Galileo No. 317 Piso PB-2, Col. Polanco IV Sección Miguel Hidalgo, C.P. 11550<br>
              Ciudad de México, México <br>
              <strong>Teléfono:</strong> +52 55 3095 5606<br>
            </p>

            <div class="social-links">
              <a target="_blank" href="https://twitter.com/fundacioneduca" class="twitter"><i class="fa fa-twitter"></i></a>
              <a target="_blank" href="https://www.facebook.com/FEducaMex/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a target="_blank" href="https://mx.linkedin.com/company/fundacion-educa-mexico-a.c" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright" style="color:#fff !important;">
          <strong>Fundación EDUCA México, A.C.</strong>
      </div>
      <div class="credits">
        <!--Desarollado por <a href="http://qepri.com/">Qepri Technologies</a>-->
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>


<!-- Modal registro -->
<div class="modal fade animated bounceIn" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h5 class="modal-title" id="exampleModalLabel">Cargando ...</h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<!-- Modal para registro-->



<!-- Modal registro -->
<div class="modal fade animated bounceIn" id="inicia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h5 class="modal-title" id="exampleModalLabel">Cargando ...</h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<!-- Modal para registro-->


<div id="wait" style="display:none;width:100%;height:100%;position:absolute;top:0;left:0;background-color:rgba(0,0,0,0.6);z-index:9999;text-align: center;
  margin: auto;"><img style="width:auto;height: auto;position: absolute;top: 0;bottom: 0;left: 0;right: 0;margin: auto;" src="assets/img/loading.gif"></div>




  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


<script type="text/javascript">
  
  $('.register').on('click', function(e){
      e.preventDefault();
      $('#register').modal('show').find('.modal-content').load($(this).attr('href'));
    });

  $('.inicia').on('click', function(e){
      e.preventDefault();
      $('#inicia').modal('show').find('.modal-content').load($(this).attr('href'));
    });



$( document ).ready(function() {
    $('#myModal').modal('toggle')
});

         function inova(d){
            /*var id = d.getAttribute("data-id");
            var email = d.getAttribute("data-email");
            var dataTosend='id='+id+'&email='+email;
            var clase = "inova-"+id;
            var puntos = "coin-"+id;
            var empatia = "empatia-"+id;
            var alianza = "alianza-"+id;
            $.ajax({
            url: 'inova.php',
            type: 'POST',
            data:dataTosend,
            async: true,
            success: function (data) {
            $('button.focus1').focus();
            data = $.parseJSON(data);
            alert("Insignia registrada al emprendimiento");
            $('span.'+clase).text(data.inova);
            $('span.'+puntos).text(data.puntos);
            if(data.borra==2){
            var borra = $('span.'+empatia).text();
            var resta = borra - 1;
            $('span.'+empatia).text(resta);
            }
            else if(data.borra==3){
            var borra = $('span.'+alianza).text();
            var resta = borra - 1;
            $('span.'+alianza).text(resta);
            }


          },
            error : function(jqXHR, status, error){
                    if (jqXHR.status === 0) {
                        alert('Sin conexión\nPor favor, verifique su conexión a internet.');
                    } else if (jqXHR.status == 404) {
                        alert ('La página solicitada no existe.');
                    } else if (jqXHR.status == 500) {
                        alert ('Error interno del servidor.\n Intente nuevamente');
                    } else if (exception === 'parsererror') {
                        alert ('Datos incorrectos.');
                    } else if (exception === 'timeout') {
                        alert ('Tiempo de respuesta agotado.');
                    } else if (exception === 'abort') {
                        alert ('Operación cancelada');
                    } else {
                        alert ('Hubo un error\n' + jqXHR.responseText);
                    }
            }
});       
          */
swal({
                title: "Tiempo expirado",
                text: "El tiempo límite para regalar insignias ha terminado. Gracias por su participación.",
                icon: "warning",
                button: "Continuar",
                }).then(Continuar =>{
                    if(Continuar){
                    window.location.href = "#";
                }
        });
        }

          function empatia(d){/*
            var id = d.getAttribute("data-id");
            var email = d.getAttribute("data-email");
            var dataTosend='id='+id+'&email='+email;
            var clase = "empatia-"+id;
            var puntos = "coin-"+id;
            var inova = "inova-"+id;
            var alianza = "alianza-"+id;
            $.ajax({
            url: 'empatia.php',
            type: 'POST',
            data:dataTosend,
            async: true,
            success: function (data) {
            data = $.parseJSON(data);
            alert("Insignia registrada al emprendimiento");
            $('span.'+clase).text(data.inova);
            $('span.'+puntos).text(data.puntos);
            if(data.borra==1){
            var borra = $('span.'+inova).text();
            var resta = borra - 1;
            $('span.'+inova).text(resta);
            }
            else if(data.borra==3){
            var borra = $('span.'+alianza).text();
            var resta = borra - 1;
            $('span.'+alianza).text(resta);
            }

          },
        
            error : function(jqXHR, status, error){
                    if (jqXHR.status === 0) {
                        alert('Sin conexión\nPor favor, verifique su conexión a internet.');
                    } else if (jqXHR.status == 404) {
                        alert ('La página solicitada no existe.');
                    } else if (jqXHR.status == 500) {
                        alert ('Error interno del servidor.\n Intente nuevamente');
                    } else if (exception === 'parsererror') {
                        alert ('Datos incorrectos.');
                    } else if (exception === 'timeout') {
                        alert ('Tiempo de respuesta agotado.');
                    } else if (exception === 'abort') {
                        alert ('Operación cancelada');
                    } else {
                        alert ('Hubo un error\n' + jqXHR.responseText);
                    }
            }
});*/
swal({
                title: "Tiempo expirado",
                text: "El tiempo límite para regalar insignias ha terminado. Gracias por su participación.",
                icon: "warning",
                button: "Continuar",
                }).then(Continuar =>{
                    if(Continuar){
                    window.location.href = "#";
                }
        });
        }
                  function alianza(d){/*
            var id = d.getAttribute("data-id");
            var email = d.getAttribute("data-email");
            var dataTosend='id='+id+'&email='+email;
            var clase = "alianza-"+id;
            var puntos = "coin-"+id;
            var empatia = "empatia-"+id;
            var inova = "inova-"+id;
            $.ajax({
            url: 'alianzas.php',
            type: 'POST',
            data:dataTosend,
            async: true,
            success: function (data) {
            data = $.parseJSON(data);
            alert("Insignia registrada al emprendimiento");
            $('span.'+clase).text(data.alianza);
            $('span.'+puntos).text(data.puntos);
            if(data.borra==1){
            var borra = $('span.'+inova).text();
            var resta = borra - 1;
            $('span.'+inova).text(resta);
            }
            else if(data.borra==2){
            var borra = $('span.'+empatia).text();
            var resta = borra - 1;
            $('span.'+empatia).text(resta);
            }


      },
        
            error : function(jqXHR, status, error){
                    if (jqXHR.status === 0) {
                        alert('Sin conexión\nPor favor, verifique su conexión a internet.');
                    } else if (jqXHR.status == 404) {
                        alert ('La página solicitada no existe.');
                    } else if (jqXHR.status == 500) {
                        alert ('Error interno del servidor.\n Intente nuevamente');
                    } else if (exception === 'parsererror') {
                        alert ('Datos incorrectos.');
                    } else if (exception === 'timeout') {
                        alert ('Tiempo de respuesta agotado.');
                    } else if (exception === 'abort') {
                        alert ('Operación cancelada');
                    } else {
                        alert ('Hubo un error\n' + jqXHR.responseText);
                    }
            }
});    */    
swal({
                title: "Tiempo expirado",
                text: "El tiempo límite para regalar insignias ha terminado. Gracias por su participación.",
                icon: "warning",
                button: "Continuar",
                }).then(Continuar =>{
                    if(Continuar){
                    window.location.href = "#";
                }
        });
              }
         

</script>


</body>

</html>