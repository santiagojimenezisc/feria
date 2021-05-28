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
  <link href="assets/css/style.css?v=2.1.69" rel="stylesheet">


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

<style>

.close:hover{
  color:#2F488C!important;
}

</style>

</head>


<?php
if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) && ($_GET["action"]=="activate") && !isset($_POST["action"])){
  $key = $_GET["key"];
  $email = $_GET["email"];
  $curDate = date("Y-m-d H:i:s");
  $query = mysqli_query($con,"SELECT * FROM REGISTRO_TEMPORAL WHERE email='$email' and token='$key'") or die ("Error78");
  $row = mysqli_num_rows($query);
  if ($row<1){
echo'<script>
$(document).ready(function(){
        swal({
                title: "Enlace inválido",
                text: "Su registro ha expirado, debe volver a registrarse",
                icon: "warning",
                closeOnClickOutside: false,
                button: "Continuar",
                }).then(Continuar =>{
                    if(Continuar){
                    window.location.href = "emprendimientos.php";
                }
        });
      });
</script>';
 }else{
  $row = mysqli_fetch_assoc($query);
  $expDate = $row['expdate'];
  if ($expDate >= $curDate){
    $iduser = $row['id'];
    $nombre = $row['nombre'];
    $apellidos = $row['apellidos'];
    $pass = $row['password'];
    $email = $row['email'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $insertaregistro = "INSERT INTO REGISTRO (nombre, apellidos, email, password,fecha_registro,ip_conexion,browser) VALUES ('$nombre','$apellidos','$email','$pass',NOW(),'$ip','$browser')";
    $insertareg = mysqli_query($con,$insertaregistro) or die("Error de servidor. Intente más tarde");
    $borratmp = mysqli_query($con,"DELETE FROM REGISTRO_TEMPORAL WHERE id='$iduser'") or die ("Error de servidor. Intente más tarde");
    $_SESSION['email'] = $email;
    echo'<script>
$(document).ready(function(){
        swal({
                title: "Cuenta activada",
                text: "Su cuenta ha sido activada",
                icon: "success",
                closeOnClickOutside: false,
                button: "Continuar",
                }).then(Continuar =>{
                    if(Continuar){
                    window.location.href = "emprendimientos.php";
                }
        });
      });
</script>';
}else{
$iduser= $row['id'];
$borratmp = mysqli_query($con,"DELETE FROM REGISTRO_TEMPORAL WHERE id='$iduser'") or die ("Error de servidor. Intente más tarde");
echo'<script>
$(document).ready(function(){
        swal({
                title: "Enlace inválido",
                text: "Su registro ha expirado, debe volver a registrarse",
                icon: "warning",
                closeOnClickOutside: false,
                button: "Continuar",
                }).then(Continuar =>{
                    if(Continuar){
                    window.location.href = "index.php";
                }
        });
      });
</script>';
      } 
} 
}
?>



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
          <li class="menu-active"><a href="#emprendimientos">Emprendimientos</a></li>
          <li><a href="index.php#gallery">Galería</a></li>
          <li><a href="index.php#supporters">Donantes</a></li>
          <li><a href="index.php#contact">Contacto</a></li>
          <!--<li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li>-->
          <?
          if($namei!=''){
            echo'<button class="btn dropdown-toggle registro" type="button" data-toggle="dropdown">Hola '.$namei.'
          <span class="caret"></span></button>
          <ul class="dropdown-menu">
                <li><a class="dregistro" href="logout.php">Cerrar sesión</a></li>
              </ul>';
          }
          else{
          echo'<button class="btn dropdown-toggle registro" type="button" data-toggle="dropdown">Registro
          <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a class="dregistro register" href="registro.php" data-toggle="modal" data-target="#register" data-dismiss="modal" data-backdrop="static">Registrarse</a></li>
                <li><a class="dregistro inicia" href="login.php" data-toggle="modal" data-target="#inicia" data-dismiss="modal" data-backdrop="static">Iniciar Sesión</a></li>
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
                  <h4> Selecciona el Pabellón de tu interés para visualizar los emprendimientos</h4>

                <!-- Portfolio Grid Items-->
                <div class="row">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-4 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fa fa-eye fa-2x"></i><br>PABELLÓN GENERAL</div>
                            </div>
                            <img class="img-fluid" style="height: 20rem !important;" src="assets/img/general.png" alt="Pabellon General" />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-4 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fa fa-eye fa-2x"></i><br>PABELLÓN MEDIO AMBIENTE</div>
                            </div>
                            <img class="img-fluid" style="height: 20rem !important;" src="assets/img/medio.png" alt="Pabellón Medio Ambiente" />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-4 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fa fa-eye fa-2x"></i><br>PABELLÓN TECNOLOGÍA</div>
                            </div>
                            <img class="img-fluid" style="height: 20rem !important;" src="assets/img/tecnologia.png" alt="Pabellón Tecnologia" />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-4 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fa fa-eye fa-2x"></i><br>PABELLÓN AlquiLab</div>
                            </div>
                            <img class="img-fluid" style="height: 20rem !important;" src="assets/img/alquilab.jpg" alt="Pabellón AlquiLab" />
                        </div>
                    </div>
                      <div class="col-md-12">
                    <center><a href="emprebusca.php?allentrepreneurs=1"> <button type="button" class="btn registro"> Ver todos los emprendimientos </button></a></center>
                  </div>
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

 <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times 2x"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0" id="portfolioModal1Label">Pabellón General</h2>
                                    <!-- Portfolio Modal - Text-->
                                    <br>
                                    <form id="ge1" action="emprebusca.php?pabellon=1" method="POST">
                                    <select class="browser-default custom-select" id='g1' name='g1'>
                                      <option value='' selected>Seleccione la categoría</option>
                                      <option value="1">Primaria</option>
                                      <option value="2">Secundaria</option>
                                      <option value="3">Media Superior</option>
                                    </select>
                                    <br><br>
                                    <select class="browser-default custom-select" id='g2' name='g2'>
                                      <option value='' selected>Seleccione el tipo</option>
                                      <option value="1">Social</option>
                                      <option value="2">Financiero</option>
                                    </select>
                                    <br><br>
                                    <select class="browser-default custom-select" id='g3' name='g3'>
                                      <option value='' selected>Seleccione la etapa</option>
                                      <option value="1">Etapa 1. Generación de ideas</option>
                                      <option value="2">Etapa 2. Planeación</option>
                                      <option value="3">Etapa 3. Ejecución</option>
                                      <option value="4">Etapa 4. Evaluación</option>
                                    </select>
                                    <br><br>
                                    <button class="btn registro" type="submit" id="v1">
                                        <i class="fa fa-search"></i>
                                        Ver emprendimientos
                                    </button>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times 2x"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                      <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0" id="portfolioModal2Label">Pabellón Medio Ambiente</h2>
                                    <!-- Portfolio Modal - Text-->
                                    <br>
                                    <form id="ge1" action="emprebusca.php?pabellon=2" method="POST">
                                    <select class="browser-default custom-select" id='h1' name='h1'>
                                      <option value='' selected>Seleccione la categoría</option>
                                      <option value="1">Primaria</option>
                                      <option value="2">Secundaria</option>
                                      <option value="3">Media Superior</option>
                                    </select>
                                    <br><br>
                                    <select class="browser-default custom-select" id='h2' name='h2'>
                                      <option value='' selected>Seleccione el tipo</option>
                                      <option value="1">Social</option>
                                      <option value="2">Financiero</option>
                                    </select>
                                    <br><br>
                                    <select class="browser-default custom-select" id='h3' name='h3' >
                                      <option value='' selected>Seleccione la etapa</option>
                                      <option value="1">Etapa 1. Generación de ideas</option>
                                      <option value="2">Etapa 2. Planeación</option>
                                      <option value="3">Etapa 3. Ejecución</option>
                                      <option value="4">Etapa 4. Evaluación</option>
                                    </select>
                                    <br><br>
                                    <button class="btn registro" type="submit" id="v1">
                                        <i class="fa fa-search"></i>
                                        Ver emprendimientos
                                    </button>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times 2x"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                      <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0" id="portfolioModal3Label">Pabellón Tecnología</h2>
                                    <!-- Portfolio Modal - Text-->
                                    <br>
                                    <form id="ge1" action="emprebusca.php?pabellon=3" method="POST">
                                    <select class="browser-default custom-select" id='i1' name='i1'>
                                      <option value="" selected>Seleccione la categoría</option>
                                      <option value="1">Primaria</option>
                                      <option value="2">Secundaria</option>
                                      <option value="3">Media Superior</option>
                                    </select>
                                    <br><br>
                                    <select class="browser-default custom-select" id='i2' name='i2'>
                                      <option value="" selected>Seleccione el tipo</option>
                                      <option value="1">Social</option>
                                      <option value="2">Financiero</option>
                                    </select>
                                    <br><br>
                                    <select class="browser-default custom-select" id='i3' name='i3'>
                                      <option value="" selected>Seleccione la etapa</option>
                                      <option value="1">Etapa 1. Generación de ideas</option>
                                      <option value="2">Etapa 2. Planeación</option>
                                      <option value="3">Etapa 3. Ejecución</option>
                                      <option value="4">Etapa 4. Evaluación</option>
                                    </select>
                                    <br><br>
                                    <button class="btn registro" type="submit" id="v1">
                                        <i class="fa fa-search"></i>
                                        Ver emprendimientos
                                    </button>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

          <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times 2x"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                      <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0" id="portfolioModal4Label">Pabellón AlquiLab</h2>
                                    <!-- Portfolio Modal - Text-->
                                    <br>
                                    <form id="ge1" action="emprebusca.php?pabellon=4" method="POST">
                                    <select class="browser-default custom-select" id='a1' name='a1'>
                                      <option value='' selected>Seleccione la categoría</option>
                                      <option value="1">Primaria</option>
                                      <option value="2">Secundaria</option>
                                      <option value="3">Media Superior</option>
                                    </select>
                                    <br><br>
                                    <select class="browser-default custom-select" id='a2' name='a2'>
                                      <option value='' selected>Seleccione el tipo</option>
                                      <option value="1">Social</option>
                                      <option value="2">Financiero</option>
                                    </select>
                                    <br><br>
                                    <br><br>
                                    <button class="btn registro" type="submit" id="v1">
                                        <i class="fa fa-search"></i>
                                        Ver emprendimientos
                                    </button>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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

</script>


</body>

</html>