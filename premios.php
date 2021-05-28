<?php
include_once 'dbConnection.php';
session_start();
if (!(isset($_SESSION['email']))) {
} else {
    $email = $_SESSION['email'];
    $id = $_SESSION['id'];
}
$buscanombre=mysqli_query($con,"SELECT * FROM `Emprendimientos` where id='$id'") or die ("Error de nombre");
$name=mysqli_fetch_array($buscanombre);
$namee=$name['nombre'];
$ide=$name['id'];
$buscapuntos=mysqli_query($con,"SELECT puntos FROM `PUNTOS` where id='$ide'") or die ("Error de nombre");
$point=mysqli_fetch_array($buscapuntos);
$puntos=$point['puntos'];
$buscanje=mysqli_query($con,"SELECT id FROM `CANJE` WHERE emprendimiento='$namee'") or die ("Error de conexión");
$canjeado=mysqli_num_rows($buscanje);
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
  <link href="assets/css/style.css?ver=3.582" rel="stylesheet">


    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>

  <!-- Vendor JS Files -->
  <!--<script src="assets/vendor/jquery/jquery.min.js"></script>-->
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
          if($namee!=''){
            echo'<button class="btn dropdown-toggle registro" type="button" data-toggle="dropdown">Hola
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
                <li><a class="dregistro inicia" style="cursor:pointer;" data-load-url="loginp.php" data-toggle="modal" data-target="#inicia" data-dismiss="modal" data-backdrop="static">Iniciar Sesión</a></li>
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
          <h2>Premios</h2>
          <p>Canjea tus EDUCACOINS por increibles premios.</p>
        </div>
<!-- Page Content -->
  <div class="container">

    <div class="row">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="assets/img/SLIDER-01.jpg" alt="First slide">
            </div>
           <!-- <div class="carousel-item">
              <img class="d-block img-fluid" src="assets/img/premios/premio2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="assets/img/premios/premio3.jpg" alt="Third slide">
            </div>-->
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
              <?
                  if($namee!=''){
                  echo'<div class="col-md-12">
                  <h4> Hola "'.$namee.'"</h4>
                  <p>EDUCACOINS disponibles: '.$puntos.' <img src="assets/img/coin.png" style="width: 1rem" alt="coin"><br>
                  Premios canjeados: '.$canjeado.'</p>
                  </div><br>';
                  }
              ?>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="assets/img/premios/34384.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Goma</a>
                </h4>
                <h5><img src="assets/img/coin.png" style="width: 1rem" alt="coin"> 1 - 24 </h5> 
                <p class="card-text">Goma Maped Stick</p>
              </div>
              <div class="card-footer">
                <center><a class="canjea" href="premio1.php" data-toggle="modal" data-target="#canjea" data-dismiss="modal" data-backdrop="static"><button type="button" class="btn btn-primary">Canjear</button></a></center>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="assets/img/premios/66583.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Sacapuntas</a>
                </h4>
                <h5><img src="assets/img/coin.png" style="width: 1rem" alt="coin"> 1 - 24 </h5>
                <p class="card-text">SACAPUNTAS MAPED CROC CROC</p>
              </div>
              <div class="card-footer">
                <center><a class="canjea" href="premio2.php" data-toggle="modal" data-target="#canjea" data-dismiss="modal" data-backdrop="static"><button type="button" class="btn btn-primary">Canjear</button></a></center>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="assets/img/premios/55489.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Sacapuntas</a>
                </h4>
                <h5><img src="assets/img/coin.png" style="width: 1rem" alt="coin"> 1 - 24 </h5>
                <p class="card-text">SACAPUNTAS MAPED TUR-BOO</p>
              </div>
              <div class="card-footer">
                <center><a class="canjea" href="premio3.php" data-toggle="modal" data-target="#canjea" data-dismiss="modal" data-backdrop="static"><button type="button" class="btn btn-primary">Canjear</button></a></center>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="assets/img/premios/66801.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Tijeras</a>
                </h4>
                <h5><img src="assets/img/coin.png" style="width: 1rem" alt="coin"> 25 </h5>
                <p class="card-text">TIJERAS MAPED ZENOA</p>
              </div>
              <div class="card-footer">
                <center><a class="canjea" href="premio4.php" data-toggle="modal" data-target="#canjea" data-dismiss="modal" data-backdrop="static"><button type="button" class="btn btn-primary">Canjear</button></a></center>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="assets/img/premios/31555.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Lapicera</a>
                </h4>
                <h5><img src="assets/img/coin.png" style="width: 1rem" alt="coin"> 30 </h5>
                <p class="card-text">LAPICERA SABLON WACKY BOX JR.</p>
              </div>
              <div class="card-footer">
                <center><a class="canjea" href="premio5.php" data-toggle="modal" data-target="#canjea" data-dismiss="modal" data-backdrop="static"><button type="button" class="btn btn-primary">Canjear</button></a></center>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="assets/img/premios/25942.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Lapicera</a>
                </h4>
                <h5><img src="assets/img/coin.png" style="width: 1rem" alt="coin"> 40 </h5>
                <p class="card-text">LAPICERA SABLON 9010</p>
              </div>
              <div class="card-footer">
                <center><a class="canjea" href="premio6.php" data-toggle="modal" data-target="#canjea" data-dismiss="modal" data-backdrop="static"><button type="button" class="btn btn-primary">Canjear</button></a></center>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="assets/img/premios/premio10.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Lapicera</a>
                </h4>
                <h5><img src="assets/img/coin.png" style="width: 1rem" alt="coin"> 40 </h5>
                <p class="card-text">Lapicera Escolar Basic City PB31BC / Rosa</p>
              </div>
              <div class="card-footer">
                <center><a class="canjea" href="premio7.php" data-toggle="modal" data-target="#canjea" data-dismiss="modal" data-backdrop="static"><button type="button" class="btn btn-primary">Canjear</button></a></center>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="assets/img/premios/45506.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Lápices de colores</a>
                </h4>
                <h5><img src="assets/img/coin.png" style="width: 1rem" alt="coin"> 50 </h5>
                <p class="card-text">LAPICES DE COLORES CRAYOLA TRIANGULARES (12 PZS.)</p>
              </div>
              <div class="card-footer">
                <center><a class="canjea" href="premio8.php" data-toggle="modal" data-target="#canjea" data-dismiss="modal" data-backdrop="static"><button type="button" class="btn btn-primary">Canjear</button></a></center>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="assets/img/premios/premio8.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Plumones</a>
                </h4>
                <h5><img src="assets/img/coin.png" style="width: 1rem" alt="coin"> 110 </h5>
                <p class="card-text">PLUMONES CRAYOLA LAVABLES CON 20</p>
              </div>
              <div class="card-footer">
                <center><a class="canjea" href="premio9.php" data-toggle="modal" data-target="#canjea" data-dismiss="modal" data-backdrop="static"><button type="button" class="btn btn-primary">Canjear</button></a></center>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="assets/img/premios/premio7.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Audífonos</a>
                </h4>
                <h5><img src="assets/img/coin.png" style="width: 1rem" alt="coin"> 150 </h5>
                <p class="card-text">Billboard – Audífonos Rhyme –In-ear - Negro</p>
              </div>
              <div class="card-footer">
                <center><a class="canjea" href="premio10.php" data-toggle="modal" data-target="#canjea" data-dismiss="modal" data-backdrop="static"><button type="button" class="btn btn-primary">Canjear</button></a></center>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="assets/img/premios/premio6.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Audífonos</a>
                </h4>
                <h5><img src="assets/img/coin.png" style="width: 1rem" alt="coin"> 190 </h5>
                <p class="card-text">Energy Sistem – Audífonos alámbricos Sport 2 con micrófono – Negro/Azul</p>
              </div>
              <div class="card-footer">
                <center><a class="canjea" href="premio11.php" data-toggle="modal" data-target="#canjea" data-dismiss="modal" data-backdrop="static"><button type="button" class="btn btn-primary">Canjear</button></a></center>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="assets/img/premios/1000224868.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Bocinas</a>
                </h4>
                <h5><img src="assets/img/coin.png" style="width: 1rem" alt="coin"> 200 </h5>
                <p class="card-text">Rainbow - Bocinas alámbricas Cocoon USB - 2.0 - Negro</p>
              </div>
              <div class="card-footer">
                <center><a class="canjea" href="premio12.php" data-toggle="modal" data-target="#canjea" data-dismiss="modal" data-backdrop="static"><button type="button" class="btn btn-primary">Canjear</button></a></center>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="assets/img/premios/78279.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Lentes VR</a>
                </h4>
                <h5><img src="assets/img/coin.png" style="width: 1rem" alt="coin"> 250 </h5>
                <p class="card-text">LENTES VR BLUE (NEGRO)</p>
              </div>
              <div class="card-footer">
                <center><a class="canjea" href="premio13.php" data-toggle="modal" data-target="#canjea" data-dismiss="modal" data-backdrop="static"><button type="button" class="btn btn-primary">Canjear</button></a></center>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="assets/img/premios/premio3.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Bocina Bluetooth</a>
                </h4>
                <h5><img src="assets/img/coin.png" style="width: 1rem" alt="coin"> 250 </h5>
                <p class="card-text">BOCINA BLUETOOTH BILLBOARD ALLURE STAND (NEGRO)</p>
              </div>
              <div class="card-footer">
                <center><a class="canjea" href="premio14.php" data-toggle="modal" data-target="#canjea" data-dismiss="modal" data-backdrop="static"><button type="button" class="btn btn-primary">Canjear</button></a></center>
              </div>
            </div>
          </div>

          
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="assets/img/premios/premio2.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Control para celular vía bluetooth para videojuegos</a>
                </h4>
                <h5><img src="assets/img/coin.png" style="width: 1rem" alt="coin"> 390 </h5>
                <p class="card-text">Control Bluetooth para Videojuegos de Smartphone, Compatible con Android y Windows</p>
              </div>
              <div class="card-footer">
                <center><a class="canjea" href="premio15.php" data-toggle="modal" data-target="#canjea" data-dismiss="modal" data-backdrop="static"><button type="button" class="btn btn-primary">Canjear</button></a></center>
              </div>
            </div>
          </div>

          
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="assets/img/premios/41.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Lentes VR</a>
                </h4>
                <h5><img src="assets/img/coin.png" style="width: 1rem" alt="coin"> 340 </h5>
                <p class="card-text">LENTES DE REALIDAD VIRTUAL VR BOX CON CONTROL REMOTO</p>
              </div>
              <div class="card-footer">
                <center><a class="canjea" href="premio16.php" data-toggle="modal" data-target="#canjea" data-dismiss="modal" data-backdrop="static"><button type="button" class="btn btn-primary">Canjear</button></a></center>
              </div>
            </div>
          </div>

          

          

          

        </div>
        <!-- /.row -->


    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  

               
            </div>
        </section>/
        

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


<!-- Modal registro -->
<div class="modal fade animated bounceIn" id="canjea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-full" role="document">
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

<div id="wait" style="display:none;width:100%;height:100%;position:fixed;top:0;left:0;background-color:rgba(0,0,0,0.6);z-index:9999;text-align: center;
  margin: auto;"><img style="width:auto;height: auto;position: absolute;top: 0;bottom: 0;left: 0;right: 0;margin: auto;" src="https://educa.org.mx/FeriaEDUCA2020/assets/img/loading.gif"></div>



  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<script type="text/javascript">
  
  $('.register').on('click', function(e){
      e.preventDefault();
      $('#register').modal('show').find('.modal-content').load($(this).attr('href'));
    });

$('#inicia').on('show.bs.modal', function (e) {
    var loadurl = $(e.relatedTarget).data('load-url');
    $(this).find('.modal-content').load(loadurl);
});

  $('.canjea').on('click', function(e){
      e.preventDefault();
      $('#canjea').modal('show').find('.modal-content').load($(this).attr('href'));
    });

</script>


</body>

</html>