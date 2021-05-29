<?php
include_once 'dbConnection.php';
session_start();
if (!(isset($_SESSION['email']))) {
} else {
    $email = $_SESSION['email'];
}
$buscanombre=mysqli_query($con,"SELECT * FROM `REGISTRO` where email='$email'") or die ("Error de nombre - index");
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

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css?v=2.1.46" rel="stylesheet">

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


</head>

<body>

<!-- Facebook Live -->

<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

<!-- End Facebook Live --> 

<!-- Modal 
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">


      <div class="modal-body">

  

       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      <div class="fb-video" data-href="https://www.facebook.com/FEducaMex/videos/283079959714488/"  
  data-allowfullscreen="true" data-width="auto" data-autoplay="true"></div>

      </div>

    </div>
  </div>
</div>-->



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
          <li class="menu-active"><a href="index.php">Inicio</a></li>
          <li><a href="#about">Objetivo</a></li>
          <li><a href="#speakers">Streaming</a></li>
          <li><a href="#schedule">Programa</a></li>
          <li><a href="#venue">Aflatoun</a></li>
          <li><a href="emprendimientos.php">Emprendimientos</a></li>
          <li><a href="#gallery">Galería</a></li>
          <li><a href="#supporters">Donantes</a></li>
          <li><a href="#contact">Contacto</a></li>
          <!--<li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li>-->
           <?php
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
                <li><a class="dregistro register" data-load-url="registro.php" data-toggle="modal" data-target="#register" data-dismiss="modal" data-backdrop="static">Registrarse</a></li>
                <li><a class="dregistro inicia" data-load-url="login.php" data-toggle="modal" data-target="#inicia" data-dismiss="modal" data-backdrop="static">Iniciar Sesión</a></li>
              </ul>';
          }
          ?> 
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container wow fadeIn">
     <div id="background-carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/img/SLIDER-01.jpg" alt="Feria EDUCA, Ahorra y Emprende">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/SLIDER-02.jpg" alt="Feria EDUCA, Ahorra y Emprende">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/SLIDER-03.jpg" alt="Feria EDUCA, Ahorra y Emprende">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/SLIDER-04.jpg" alt="Feria EDUCA, Ahorra y Emprende">
    </div>
  </div>
</div>
      <!--<h1 class="mb-4 pb-0">Feria<br><span>EDUCA</span> Ahorra y Emprende 2020</h1>
      <p class="mb-4 pb-0">22-26 Junio</p>-->
      <a href="https://www.youtube.com/watch?v=RiS3DLa7PbQ" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
      <a href="#about" class="about-btn scrollto">Acerca de la Feria</a>
    </div>
  </section><!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>Feria EDUCA, Ahorra y Emprende</h2>
            <p>OBJETIVO: Reunir a niñas, niños, jóvenes, maestros y padres de familia agentes de cambio en un evento virtual para compartir experiencias, presentar proyectos y participar en transmisiones en vivo sobre educación financiera, emprendimiento, empoderamiento y cuidado del medio ambiente.</p>
          </div>
          <div class="col-lg-3">
            <h3>¿Dónde?</h3>
            <p>Facebook Live EDUCA</p>
          </div>
          <div class="col-lg-3">
            <h3>¿Cuándo?</h3>
            <p>22 al 30 de junio de 2020</p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Speakers Section ======= -->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Transmisiones en Vivo</h2>
          <h3><a target="_blank" href="https://www.facebook.com/FEducaMex/"><button type="button" class="btn btn-primary fblive">Facebook Live EDUCA</button></a></h3>
          <p>22 al 26 de junio, 18:00 a 19:00 horas</p>
        </div>


        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="assets/img/speakers/1-1.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speak1.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">Irma Wilde López </a></h3>
                <p>Vicepresidenta Adjunta de Digital y Experiencia del Cliente en AT&T en México</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="assets/img/speakers/2-2.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="speak2.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">Mario Alberto Garcia Ortiz </a></h3>
                <p>Coordinador DO Desarrollo de Talento, Desarrollo Organizacional</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="assets/img/speakers/3-3.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="speak3.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">Jannette Karina Campos Vara</a></h3>
                <p>Coordinadora Técnica Eco-Schools (FEE México)</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 offset-lg-2">
            <div class="speaker">
              <img src="assets/img/speakers/4.jpg" alt="Speaker 4" class="img-fluid">
              <div class="details">
                <h3><a href="speak4.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">Verónica Porte Petit Anduaga</a></h3>
                <p>Especialista en desarrollo de contenidos, programas sociales y educativos, salud financiera</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="assets/img/speakers/5.jpg" alt="Speaker 5" class="img-fluid">
              <div class="details">
                <h3><a href="speak5.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">Antonio Salvador</a></h3>
                <p>Servicios de Asesoría de Transacciones en EY</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!--
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="assets/img/speakers/6.jpg" alt="Speaker 6" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Willow Trantow</a></h3>
                <p>Non autem dicta</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>-->
        </div>
      </div>

    </section><!-- End Speakers Section -->

    <!-- ======= Schedule Section ======= -->
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Programa</h2>
          <p>Agenda de la Feria EDUCA, Ahorra y Emprende 2020</p>
        </div>

        <div class="container">
         <div class="scroller scroller-left float-left mt-2"><i class="fa fa-chevron-left"></i></div>
         <div class="scroller scroller-right float-right mt-2"><i class="fa fa-chevron-right"></i></div>
        <div class="wrapper">
        <ul class="nav nav-tabs list" role="tablist">
          <li class="nav-item">
            <a class="nav-link" href="#day-1" role="tab" data-toggle="tab">Lunes 22</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Martes 23</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Miércoles 24</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-4" role="tab" data-toggle="tab">Jueves 25</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-5" role="tab" data-toggle="tab">Viernes 26</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-6" role="tab" data-toggle="tab">Lunes 29</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#day-7" role="tab" data-toggle="tab">Martes 30</a>
          </li>
        </ul>
          </div>
</div>

 <?php 
          date_default_timezone_set("America/Mexico_City");
          $time = time();
          $actual=(date("H:i:s", $time));

    ?>

        <h3 class="sub-heading">Consulte la agenda por día de la Feria EDUCA, Ahorra y Emprende 2020</h3>

        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade" id="day-1">

            <a class="pass1" target="_blank" href="https://www.facebook.com/FEducaMex/videos/716232145614164/">
              <div class="row schedule-item pass">
              <div class="col-md-2"><time>09:00 - 09:30 </time></div>
              <div class="col-md-10">
                <h4>Facebook Live EDUCA</h4>
                <p>Inauguración | Conferencia en línea Importancia del empoderamiento social y financiero de niñas, niños y jóvenes en la Región</p>
              </div>
            </div>
          </a>

            <a class="pass1" target="_blank" href="https://www.facebook.com/FEducaMex/videos/716232145614164/">
            <div class="row schedule-item pass">
              <div class="col-md-2"><time>09:30 - 10:00</time></div>
              <div class="col-md-10">
                <h4>Facebook Live EDUCA</h4>
                <p>Lanzamiento de la Plataforma Feria EDUCA, Ahorra y Emprende</p>
              </div>
            </div>
            </a>

            <div class="row schedule-item pass">
              <div class="col-md-2"><time>10:30 - 12:00</time></div>
              <div class="col-md-10">
                <h4>Llamadas virtuales | Niñas y niños </h4>
                <p>Educación financiera, emprendimiento y cuidado del medio ambiente ante el COVID-19</p>
              </div>
            </div>

            <div class="row schedule-item pass">
              <div class="col-md-2"><time>12:00 - 13:30</time></div>
              <div class="col-md-10">
                <h4>Llamadas virtuales | Jóvenes </h4>
                <p>Educación financiera, emprendimiento y cuidado del medio ambiente ante el COVID-19</p>
              </div>
            </div>

            <div class="row schedule-item pass">
              <div class="col-md-2"><time>13:30 - 15:00</time></div>
              <div class="col-md-10">
                <h4>Llamadas virtuales | Maestros </h4>
                <p>Resiliencia, educación financiera y emprendimiento ante el COVID -19</p>
              </div>
            </div>
    
            <a class="pass1" target="_blank" href="https://www.facebook.com/FEducaMex/videos/3019481191481565/">
            <div class="row schedule-item pass">
              <div class="col-md-2"><time>18:00 - 19:00</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/1.jpg" alt="Irma Wilde">
                </div>
               <!--<a style="color:#ee3532 !important;cursor: pointer!important;" data-toggle="modal" data-target="#myModal">--><h4>Facebook Live EDUCA<span>Irma Wilde, AVP de Digital y Customer Experience</span></h4><!--<button type="button" class="btn btn-primary registro1" data-toggle="modal" data-target="#myModal" style="cursor: pointer!important;">Ver ahora</button>-->
                <p>Estrategias de salud financiera para familias | Recomendaciones sobre servicios financieros relacionadas a préstamos o deudas</p>
              </div>
            </div>
          </a>

          </div>
          <!-- End Schdule Day 1 -->




          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <!--<div class="row schedule-item">
              <div class="col-md-2"><time>08:30 - 09:30</time></div>
              <div class="col-md-10">
                <h4>Concurso Emprendimientos Primaria Baja</h4>
                <p>1° Primaria | Grupo 1</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>09:30 - 10:30</time></div>
              <div class="col-md-10">
                <h4>Concurso Emprendimientos Primaria Baja</h4>
                <p>1° Primaria | Grupo 2</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:30 - 11:30</time></div>
              <div class="col-md-10">
                <h4>Concurso Emprendimientos Primaria Baja</h4>
                <p>2° Primaria | Grupo 1</p>
               </div>
            </div>-->

            <div class="row schedule-item pass">
              <div class="col-md-2"><time>11:30 - 12:30</time></div>
              <div class="col-md-10">
                <h4>Emprendimientos Primaria</h4>
                <?php 
                   /* $hora1 = "11:30:00";
                    $hora2 = "12:29:59";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>2° Primaria | Grupo 1</p>
               </div>
            </div>

            <div class="row schedule-item pass">
              <div class="col-md-2"><time>12:30 - 13:30</time></div>
              <div class="col-md-10">
                <h4>Emprendimientos Primaria</h4>
                <?php 
                    /*$hora1 = "12:30:00";
                    $hora2 = "13:30:00";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>3° Primaria | Grupo 2</p>
               </div>
            </div>

           <!-- <div class="row schedule-item">
              <div class="col-md-2"><time>13:30 - 14:30</time></div>
              <div class="col-md-10">
                <h4>Concurso Emprendimientos Primaria Baja</h4>
                <p>3° Primaria | Grupo 2</p>
               </div>
            </div>-->

             <div class="row schedule-item pass">
              <div class="col-md-2"><time>18:00 - 19:00 </time></div>
              <div class="col-md-10">
                 <div class="speaker">
                  <img src="assets/img/speakers/4.jpg" alt="Irma Wilde">
                </div>
                <h4>Facebook Live EDUCA<span>Verónica Porte Petit Anduaga,Especialista en desarrollo de contenidos, programas sociales y educativos, salud financiera</span></h4>
                <?php 
                    /*$hora1 = "18:00:00";
                    $hora2 = "19:00:00";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          
                          echo'<button type="button" class="btn btn-primary registro1" data-toggle="modal" data-target="#myModal" style="cursor: pointer!important;">Ver ahora</button>';
                      }*/
                  ?>
                <p>Presupuesto y ahorro familiar</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

           
            <div class="row schedule-item pass">
              <div class="col-md-2"><time>08:30 - 09:30</time></div>
              <div class="col-md-10">
                <h4>Emprendimientos Primaria</h4>
                  <?php 
                    /*$hora1 = "08:30:00";
                    $hora2 = "09:29:59";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>4° Primaria | Grupo 1</p>
              </div>
            </div>

            <div class="row schedule-item pass">
              <div class="col-md-2"><time>09:30 - 10:30</time></div>
              <div class="col-md-10">
                <h4>Emprendimientos Primaria</h4>
                  <?php 
                    /*$hora1 = "09:30:00";
                    $hora2 = "10:29:59";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>1° Primaria | Grupo 2</p>
              </div>
            </div>

            <div class="row schedule-item pass">
              <div class="col-md-2"><time>10:30 - 11:30</time></div>
              <div class="col-md-10">
                <h4>Emprendimientos Primaria</h4>
                  <?php 
                    /*$hora1 = "10:30:00";
                    $hora2 = "11:29:59";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>5° Primaria | Grupo 3</p>
               </div>
            </div>

            <div class="row schedule-item pass">
              <div class="col-md-2"><time>11:30 - 12:30</time></div>
              <div class="col-md-10">
                <h4>Emprendimientos Primaria</h4>
                  <?php 
                    /*$hora1 = "11:30:00";
                    $hora2 = "12:29:59";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>5° Primaria | Grupo 4</p>
               </div>
            </div>

            <div class="row schedule-item pass">
              <div class="col-md-2"><time>12:30 - 13:30</time></div>
              <div class="col-md-10">
                <h4>Emprendimientos Primaria</h4>
                  <?php 
                    /*$hora1 = "12:30:00";
                    $hora2 = "13:29:59";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>6° Primaria | Grupo 5</p>
               </div>
            </div>

            <div class="row schedule-item pass">
              <div class="col-md-2"><time>13:30 - 14:30</time></div>
              <div class="col-md-10">
                <h4>Emprendimientos Primaria</h4>
                  <?php 
                    /*$hora1 = "13:30:00";
                    $hora2 = "14:29:59";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>6° Primaria | Grupo 6</p>
               </div>
            </div>

             <div class="row schedule-item pass">
              <div class="col-md-2"><time>18:00 - 19:00 </time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/2.jpg" alt="Mario Garcia">
                </div>
                <h4>Facebook Live EDUCA <span>Mario Alberto Garcia Ortiz, Coordinador DO Desarrollo de Talento, Desarrollo Organizacional</span></h4>
                 <?php 
                    /*$hora1 = "18:00:00";
                    $hora2 = "19:00:00";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>Retos para Emprendedores ante la crisis</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 3 -->


          <!-- Schdule Day 4 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-4">

           
            <div class="row schedule-item pass">
              <div class="col-md-2"><time>08:30 - 09:30</time></div>
              <div class="col-md-10">
                <h4>Emprendimientos Secundaria-Media Superior</h4>
                 <?php 
                   /* $hora1 = "08:30:00";
                    $hora2 = "09:29:59";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>Secundaria | Grupo 1</p>
              </div>
            </div>

            <div class="row schedule-item pass">
              <div class="col-md-2"><time>09:30 - 10:30</time></div>
              <div class="col-md-10">
                <h4>Emprendimientos Secundaria-Media Superior</h4>
                 <?php 
                   /* $hora1 = "09:30:00";
                    $hora2 = "10:29:59";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>Secundaria | Grupo 2</p>
              </div>
            </div>

            <div class="row schedule-item pass">
              <div class="col-md-2"><time>10:30 - 11:30</time></div>
              <div class="col-md-10">
                <h4>Emprendimientos Secundaria-Media Superior</h4>
                 <?php 
                  /*  $hora1 = "10:30:00";
                    $hora2 = "11:29:59";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>Media Superior | Grupo 3</p>
               </div>
            </div>

            <div class="row schedule-item pass">
              <div class="col-md-2"><time>11:30 - 12:30</time></div>
              <div class="col-md-10">
                <h4>Emprendimientos Secundaria-Media Superior</h4>
                 <?php 
                    /*$hora1 = "11:30:00";
                    $hora2 = "12:30:00";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>Media Superior | Grupo 4</p>
               </div>
            </div>

             <div class="row schedule-item pass">
              <div class="col-md-2"><time>18:00 - 19:00 </time></div>
              <div class="col-md-10">
                 <div class="speaker">
                  <img src="assets/img/speakers/Jannette-.jpg" alt="Jannette Karina Campos Vara">
                </div>
                <h4>Facebook Live EDUCA <span>Jannette Karina Campos Vara, Coordinadora Técnica Eco-Schools (FEE México)</span></h4>
                 <?php 
                  /*  $hora1 = "18:00:00";
                    $hora2 = "19:00:00";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>Cuidar el medio ambiente desde casa</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 4 -->


          <!-- Schdule Day 5 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-5">
           
            <div class="row schedule-item pass">
              <div class="col-md-2"><time>08:30 - 09:30</time></div>
              <div class="col-md-10">
                <h4>Emprendimientos de Medio Ambiente</h4>
                <?php /*
                    $hora1 = "08:30:00";
                    $hora2 = "09:29:59";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>Primaria 1° a 3° | Grupo 1</p>
              </div>
            </div>

            <div class="row schedule-item pass">
              <div class="col-md-2"><time>09:30 - 10:30</time></div>
              <div class="col-md-10">
                <h4>Emprendimientos de Medio Ambiente</h4>
                 <?php /*
                    $hora1 = "09:30:00";
                    $hora2 = "10:29:59";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>Primaria 4° a 6° | Grupo 2</p>
              </div>
            </div>

            <div class="row schedule-item pass">
              <div class="col-md-2"><time>10:30 - 11:30</time></div>
              <div class="col-md-10">
                <h4>Emprendimientos de Medio Ambiente</h4>
                 <?php /*
                    $hora1 = "10:30:00";
                    $hora2 = "11:29:59";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>Secundaria | Grupo 3</p>
               </div>
            </div>

            <div class="row schedule-item pass">
              <div class="col-md-2"><time>11:30 - 12:30</time></div>
              <div class="col-md-10">
                <h4>Emprendimientos de Medio Ambiente</h4>
                 <?php /*
                    $hora1 = "11:30:00";
                    $hora2 = "12:30:00";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>Primaria 1° a 3° | Grupo 4</p>
               </div>
            </div>

             <div class="row schedule-item pass">
              <div class="col-md-2"><time>18:00 - 19:00 </time></div>
              <div class="col-md-10">
                   <div class="speaker">
                  <img src="assets/img/speakers/615.jpg" alt="Antonio Salvador ">
                </div>
                <h4>Facebook Live EDUCA <span>Antonio Salvador, Servicios de Asesoría de Transacciones en EY</span></h4>
                 <?php 
                   /* $hora1 = "18:00:00";
                    $hora2 = "19:00:00";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>Finanzas Personales</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 5 -->


          <!-- Schdule Day 6 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-6">
           
            <div class="row schedule-item pass">
              <div class="col-md-2"><time>08:30 - 09:30</time></div>
              <div class="col-md-10">
                <h4>Emprendimientos de Tecnología</h4>
                <p>Primaria, secundaria y media superior | Grupo 1</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 6 -->

          <!-- Schdule Day 7 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade show active" id="day-7">
           
            <div class="row schedule-item pass">
              <div class="col-md-2"><time>08:30 - 12:00</time></div>
              <div class="col-md-10">
                <h4>Concurso AlquiLab</h4>
                <p>Todas las categorías</p>
              </div>
            </div>

             <div class="row schedule-item">
              <div class="col-md-2"><time>18:00 - 19:00</time></div>
              <div class="col-md-10">
                <h4>Facebook Live EDUCA</h4>
                 <?php 
                   /* $hora1 = "18:00:00";
                    $hora2 = "19:00:00";
                      if($actual>=$hora1 && $actual<=$hora2)
                      {
                          echo'<button type="button" class="btn btn-primary registro1">Ahora</button>';
                      }*/
                  ?>
                <p>Premiación | Clausura</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 7 -->
 
        </div>

      </div>

    </section><!-- End Schedule Section -->

    <!-- ======= Venue Section ======= -->
    <section id="venue" class="wow fadeInUp">

      <div class="container-fluid">

        <div class="section-header">
          <h2>Aflatoun Internacional</h2>
          <p>Invitados Especiales Internacionales </p>
        </div>
        <center>
        <div class="embed-responsive embed-responsive-16by9 video"> 
      <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/NYK-xOsNUTQ?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
         </center>
      </div>
            <br>

    <section id="speakers" class="wow fadeInUp">
    	          <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="assets/img/speakers-i/Roeland.jpeg" alt="Speaker 1" class="img-fluid">
              <div class="details2">
                <h3><a href="speaki-1.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">Roeland Monasch</a></h3>
                <p>Executive Director (CEO)<br>Aflatoun Internacional<br>Amsterdam</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="assets/img/speakers-i/Cristina.jpeg" alt="Speaker 2" class="img-fluid">
              <div class="details2">
                <h3><a href="speaki-2.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">Cristina Peña</a></h3>
                <p>Senior Program Manager<br>Región de América Latina y el Caribe<br>Aflatoun Internacional<br>Amsterdam</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="assets/img/speakers-i/AnaYris.jpeg" alt="Speaker 3" class="img-fluid">
              <div class="details2">
                <h3><a href="speaki-3.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">Ana Yris Guzmán Torres</a></h3>
                <p>Presidenta Ejecutiva<br>Nuestra Escuela, Inc.<br>Puerto Rico</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="assets/img/speakers-i/Juana.jpeg" alt="Speaker 4" class="img-fluid">
              <div class="details2">
                <h3><a href="speaki-5.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">Juana Jule</a></h3>
                <p>Directora del Programa Oportunidades<br>Fundación Gloria de Kriete<br>El Salvador</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="assets/img/speakers-i/Ruth.jpg" alt="Speaker 5" class="img-fluid">
              <div class="details2">
                <h3><a href="speaki-6.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">Ruth Rodriguez</a></h3>
                <p>Directora de Programas de Educación<br>Fundación Amg Internacional<br>Guatemala</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="assets/img/speakers-i/Rafaela.jpg" alt="Speaker 6" class="img-fluid">
              <div class="details2">
                <h3><a href="speaki-7.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">Rafaela Campusano</a></h3>
                <p>Técnico del Programa Aspire Juvenil<br>ONG Aspire (Asociación para la Inversión y Empleo)<br>República Dominicana</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="assets/img/speakers-i/Aminta.jpg" alt="Speaker 7" class="img-fluid">
              <div class="details2">
                <h3><a href="speaki-8.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">Maria Aminta Zambrano</a></h3>
                <p>Instituto Coomuldesa I.A.C.<br>Colombia</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="assets/img/speakers-i/Hector.jpg" alt="Speaker 8" class="img-fluid">
              <div class="details2">
                <h3><a href="speaki-9.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">Héctor Madrigal Gómez</a></h3>
                <p>Vínculo Solidario<br>Ayuda en Acción México<br>México</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="assets/img/speakers-i/Monica.jpg" alt="Speaker 9" class="img-fluid">
              <div class="details2">
                <h3><a href="speaki-10.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">Monica Arcila</a></h3>
                <p>Directora General<br>Observa, A.C.<br>México</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
      </div>
</section>


          <!--<div class="container">
            <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="internacional">
              <a href="speaki-1.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">
                <button type="button" class="btn btn-primary fblive"></h4>Roeland Monasch</h4></button>
                <p style="color:#2F488C">Executive Director (CEO)<br>Aflatoun Internacional<br>Amsterdam</p>
              </a>
            </div>
          </div>

             <div class="col-lg-3 col-md-4">
            <div class="internacional">
              <a href="speaki-2.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">
                <button type="button" class="btn btn-primary fblive"></h4>Cristina Peña</h4></button>
                <p style="color:#2F488C">Senior Program Manager<br>Región de América Latina y el Caribe<br>Aflatoun Internacional<br>Amsterdam</p>
              </a>
            </div>
          </div>

            <div class="col-lg-3 col-md-4">
            <div class="internacional">
              <a href="speaki-3.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">
                <button type="button" class="btn btn-primary fblive"></h4>Ana Yris Guzmán Torres</h4></button>
                <p style="color:#2F488C">Presidenta Ejecutiva<br>Nuestra Escuela, Inc.<br>Puerto Rico</p>
              </a>
            </div>
          </div>-->

           <!--<div class="col-lg-3 col-md-4">
            <div class="internacional">
              <a href="speaki-4.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">
                <button type="button" class="btn btn-primary fblive"></h4>Marcela González Coto</h4></button>
                <p style="color:#2F488C">Dirección Investigación y Desarrollo<br>Fundación Paniamor<br>Costa Rica</p>
              </a>
            </div>
          </div>-->

          <!-- <div class="col-lg-3 col-md-4">
            <div class="internacional">
              <a href="speaki-5.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">
                <button type="button" class="btn btn-primary fblive"></h4>Juana Jule</h4></button>
                <p style="color:#2F488C">Directora del Programa Oportunidades<br>Fundación Gloria de Kriete<br>El Salvador</p>
              </a>
            </div>
          </div>

             <div class="col-lg-3 col-md-4">
            <div class="internacional">
              <a href="speaki-6.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">
                <button type="button" class="btn btn-primary fblive"></h4>Ruth Rodriguez</h4></button>
                <p style="color:#2F488C">Directora de Programas de Educación<br>Fundación Amg Internacional<br>Guatemala</p>
              </a>
            </div>
          </div>

             <div class="col-lg-3 col-md-4">
            <div class="internacional">
              <a href="speaki-7.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">
                <button type="button" class="btn btn-primary fblive">Rafaela Campusano</button>
                <p style="color:#2F488C">Técnico del Programa Aspire Juvenil<br>ONG Aspire (Asociación para la Inversión y Empleo)<br>República Dominicana</p>
              </a>
            </div>
          </div>

            <div class="col-lg-3 col-md-4">
            <div class="internacional">
              <a href="speaki-8.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">
                <button type="button" class="btn btn-primary fblive">Maria Aminta Zambrano</button>
                <p style="color:#2F488C">Instituto Coomuldesa I.A.C.<br>Colombia</p>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="internacional">
              <a href="speaki-9.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">
                <button type="button" class="btn btn-primary fblive">Héctor Madrigal Gómez</button>
                <p style="color:#2F488C">Vínculo Solidario<br>Ayuda en Acción México<br>México</p>
              </a>
            </div>
          </div>

         <div class="col-lg-12 col-md-12">
            <div class="internacional">
              <a href="speaki-10.php" data-toggle="modal" data-target="#conf1" class="conf1" data-dismiss="modal" data-backdrop="static">
                <button type="button" class="btn btn-primary fblive">Monica Arcila</button>
                <p style="color:#2F488C">Directora General<br>Observa, A.C.<br>México</p>
              </a>
            </div>
          </div>-->




         <!-- <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/3.jpg" class="venobox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/4.jpg" class="venobox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/5.jpg" class="venobox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/6.jpg" class="venobox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/7.jpg" class="venobox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="assets/img/venue-gallery/8.jpg" class="venobox" data-gall="venue-gallery">
                <img src="assets/img/venue-gallery/8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>-->

      </div>

    </section><!-- End Venue Section -->

    <!-- ======= Hotels Section ======= -->
   <!-- <section id="emprendimientos" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Emprendimientos</h2>
          <p>Puntúa, regala insignias y realiza donaciones a nuestros emprendedores.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="https://cdn.pixabay.com/photo/2018/01/13/20/58/business-3080799_960_720.png" alt="Emprendimiento 1" class="img-fluid">
              </div>
              <h3><a href="#">Emprendimiento 1</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Descripción</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="https://cdn.pixabay.com/photo/2018/01/13/20/58/business-3080799_960_720.png" alt="Emprendimiento 2" class="img-fluid">
              </div>
              <h3><a href="#">Emprendimiento 2</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div>
              <p>Descripción</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="https://cdn.pixabay.com/photo/2018/01/13/20/58/business-3080799_960_720.png" alt="Emprendimiento 3" class="img-fluid">
              </div>
              <h3><a href="#">Emprendimiento 3</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Descripción</p>
            </div>
          </div>

        </div>
      </div>

    </section>--><!-- End Hotels Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Galería</h2>
          <p>Nuestras Ferias anteriores</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
        <a href="assets/img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/1.jpg" alt=""></a>
        <a href="assets/img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/2.jpg" alt=""></a>
        <a href="assets/img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/3.jpg" alt=""></a>
        <a href="assets/img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/4.jpg" alt=""></a>
        <a href="assets/img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/5.jpg" alt=""></a>
        <a href="assets/img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/6.jpg" alt=""></a>
        <a href="assets/img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/7.jpg" alt=""></a>
        <a href="assets/img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/8.jpg" alt=""></a>
        <a href="assets/img/gallery/9.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/9.jpg" alt=""></a>
        <a href="assets/img/gallery/11.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/11.jpg" alt=""></a>
        <a href="assets/img/gallery/12.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/12.jpg" alt=""></a>
        <a href="assets/img/gallery/13.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/13.jpg" alt=""></a>
        <a href="assets/img/gallery/14.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/14.jpg" alt=""></a>
        <a href="assets/img/gallery/15.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/15.jpg" alt=""></a>
        <a href="assets/img/gallery/16.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/16.jpg" alt=""></a>
        <a href="assets/img/gallery/17.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/17.jpg" alt=""></a>
        <a href="assets/img/gallery/18.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/18.jpg" alt=""></a>
        <a href="assets/img/gallery/19.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/19.jpg" alt=""></a>
        <a href="assets/img/gallery/20.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/20.jpg" alt=""></a>
        <a href="assets/img/gallery/21.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/21.jpg" alt=""></a>
        <a href="assets/img/gallery/22.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/22.jpg" alt=""></a>
        <a href="assets/img/gallery/23.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/23.jpg" alt=""></a>
        <a href="assets/img/gallery/24.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/24.jpg" alt=""></a>
        <a href="assets/img/gallery/25.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/25.jpg" alt=""></a>

      </div>

    </section><!-- End Gallery Section -->

    <!-- ======= Supporters Section ======= -->
    <section id="supporters" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Donantes</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/3.png" class="img-fluid" alt="" style="max-height: 145px">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/5.png" class="img-fluid" alt="" style="max-height: 155px">
            </div>
          </div>


        </div>

      </div>

    </section><!-- End Sponsors Section -->

    <!-- =======  F.A.Q Section ======= -->
    <!--<section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
            <ul id="faq-list">

              <li>
                <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="fa fa-minus-circle"></i></a>
                <div id="faq1" class="collapse" data-parent="#faq-list">
                  <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="fa fa-minus-circle"></i></a>
                <div id="faq2" class="collapse" data-parent="#faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="fa fa-minus-circle"></i></a>
                <div id="faq3" class="collapse" data-parent="#faq-list">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="fa fa-minus-circle"></i></a>
                <div id="faq4" class="collapse" data-parent="#faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="fa fa-minus-circle"></i></a>
                <div id="faq5" class="collapse" data-parent="#faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="fa fa-minus-circle"></i></a>
                <div id="faq6" class="collapse" data-parent="#faq-list">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>

    </section>-->
    <!-- End  F.A.Q Section -->

    <!-- ======= Subscribe Section ======= -->
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Novedades</h2>
          <p>Déjanos tu correo electrónico y no te pierdas ningún aviso sobre la Feria EDUCA, Ahorra y Emprende.</p>
        </div>

        <form method="POST" action="#">
          <div class="form-row justify-content-center">
            <div class="col-auto">
              <input type="text" class="form-control" placeholder="Ingresa tu correo electrónico">
            </div>
            <div class="col-auto">
              <button type="submit">Suscribir</button>
            </div>
          </div>
        </form>

      </div>
    </section><!-- End Subscribe Section -->

    <!-- ======= Buy Ticket Section ======= -->
   <!-- <section id="buy-tickets" class="section-with-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h2>Buy Tickets</h2>
          <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
                <h6 class="card-price text-center">$150</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>
                <h6 class="card-price text-center">$250</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>-->
          <!-- Pro Tier -->
        <!--  <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
                <h6 class="card-price text-center">$350</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy Now</button>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>-->

      <!-- Modal Order Form -->
    <!--  <div id="buy-ticket-modal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Buy Tickets</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="#">
                <div class="form-group">
                  <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <select id="ticket-type" name="ticket-type" class="form-control">
                    <option value="">-- Select Your Ticket Type --</option>
                    <option value="standard-access">Standard Access</option>
                    <option value="pro-access">Pro Access</option>
                    <option value="premium-access">Premium Access</option>
                  </select>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn">Buy Now</button>
                </div>
              </form>
            </div>
          </div>--><!-- /.modal-content -->
       <!-- </div>--><!-- /.modal-dialog -->
      <!--</div>--><!-- /.modal -->

    <!--</section>--><!-- End Buy Ticket Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contacto</h2>
          <p>Nuestros canales de contacto.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-6">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Fundación EDUCA México A.C.</h3>
              <address>Galileo No. 317 Piso PB-2, Col. Polanco IV Sección Miguel Hidalgo, C.P. 11550, Ciudad de México</address>
            </div>
          </div>

          <div class="col-md-6">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Teléfono</h3>
              <p><a href="tel:+525530955606">(55) 3095 5606</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Su nombre" data-rule="minlen:4" data-msg="Por favor, ingrese su nombre" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Su correo electrónico" data-rule="email" data-msg="Por favor, ingrese un correo electrónico válido"/>
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor, ingrese un asunto"/>
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor, ingrese su mensaje" placeholder="Mensaje"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Enviando</div>
              <div class="error-message"></div>
              <div class="sent-message">Su mensaje ha sido enviado. ¡Muchas gracias!</div>
            </div>
            <div class="text-center"><button type="submit">Enviar</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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



<!--Modal para conferencistas-->
<div class="modal fade animated bounceIn" id="conf1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-full modal-dialog-centered" role="document">
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
<!-- Modal para conferencistas-->

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


  

<script type="text/javascript">
var hidWidth;
var scrollBarWidths = 40;
var scrollSpeed = 1000;
var widthOfList = function(){
  var itemsWidth = 0;
  $('.list li').each(function(){
    var itemWidth = $(this).outerWidth();
    itemsWidth+=itemWidth;
  });
  return itemsWidth;
};

var widthOfHidden = function(){
  return (($('.wrapper').outerWidth())-widthOfList()-getLeftPosi())-scrollBarWidths;
};

var getLeftPosi = function(){
  return $('.list').position().left;
};


var reAdjust = function(){
  if (($('.wrapper').outerWidth()) < widthOfList()) {
    $('.scroller-right').show();
  }
  else {
    $('.scroller-right').hide();
  }
  
  if (getLeftPosi()<0) {
    $('.scroller-left').show();
  }
  else {
    $('.item').animate({left:"-="+getLeftPosi()+"px"},scrollSpeed);
    $('.scroller-left').hide();
  }
}

reAdjust();

$(window).on('resize',function(e){  
    reAdjust();
});

$('.scroller-right').click(function() {
  
    $('.scroller-left').fadeIn('slow');
    
    $remained = $('.list').width() - $('.wrapper').width() + parseInt($('.list').css('left'));
 

    if ($remained >= $('.wrapper').innerWidth()) {
      $left = $('.wrapper').innerWidth();
    } else {
        $left = $remained;
        $('.scroller-right').fadeOut('slow');
    }
    
    $('.list').animate({left:"-=" + $left + "px"},scrollSpeed);
});

$('.scroller-left').click(function() {
  
  $('.scroller-right').fadeIn('slow');
    
    if (-parseInt($('.list').css('left')) > $('.wrapper').innerWidth()) {
        $left = -$('.wrapper').innerWidth();
    } else {
        $left = parseInt($('.list').css('left'));
    $('.scroller-left').fadeOut('slow');
    }
  
    $('.list').animate({left:"-=" + $left + "px"},scrollSpeed);
});    

$('.carousel').carousel({
  interval: 5000
})

$(document).on("hidden.bs.modal", function (e) {
    $(e.target).removeData("bs.modal").find(".modal-content").html('Cargando...');
});


$('.conf1').on('click', function(e){
      e.preventDefault();
      //$('#conf1').empty();
      //$('#conf1').removeData('bs.modal');
      $('#conf1').modal('show').find('.modal-content').load($(this).attr('href'));
    });

/*$('.register').on('click', function(e){
      e.preventDefault();
      $('#register').modal('show').find('.modal-content').load($(this).attr('href'));
    });*/


$('#register').on('show.bs.modal', function (e) {
    var loadurl = $(e.relatedTarget).data('load-url');
    $(this).find('.modal-content').load(loadurl);
});

$('#inicia').on('show.bs.modal', function (e) {
    var loadurl = $(e.relatedTarget).data('load-url');
    $(this).find('.modal-content').load(loadurl);
});

/*$('.inicia').on('click', function(e){
      e.preventDefault();
      $('#inicia').modal('show').find('.modal-content').load($(this).attr('href'));
    });*/


$( document ).ready(function() {
    $('#myModal').modal('toggle')
});
</script>




  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>