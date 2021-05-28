<?php
include_once '../dbConnection.php';
session_start();
if (!(isset($_SESSION['admin']))) {
    header("location:indexadmin.php");
} else {
    $username = $_SESSION['admin'];
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Administrador Feria EDUCA - Ahorra y Emprende - 2020</title>
  <!-- Favicon -->
  <link href="../assets/img/favicon32x32.ico" rel="icon">
  <link href="../assets/img/favicon16x16.ico" rel="apple-touch-icon">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.91" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/LOGO-FERIA.png" class="navbar-brand-img" alt="Feria EDUCA Ahorra y Emprende">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">General</span>
              </a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Icons</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Google</span>
              </a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link" href="users.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Usuarios</span>
              </a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" href="examples/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li>-->
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Resultados</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
           <li class="nav-item">
              <a class="nav-link" href="emprendimientos.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Emprendimientos</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="canjes.php">
                <i class="ni ni-trophy text-yellow"></i>
                <span class="nav-link-text">Premios Canjeados</span>
              </a>
            </li>
           <!-- <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Getting started</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Foundation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                <i class="ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Plugins</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active active-pro" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade to PRO</span>
              </a>
            </li>-->
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input id="entradafilter" class="form-control" placeholder="Buscar" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
      
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/LOGO-EDUCA.png">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Administrador</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">¡Bienvenido!</h6>
                </div>
                <a href="#" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>Mi perfil</span>
                </a>
                <!--<a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>-->
                <div class="dropdown-divider"></div>
                <a href="logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Cerrar sesión</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<?php 
          date_default_timezone_set("America/Mexico_City");
          //$time = time();
          //$actual=(date("H:i:s", $time));
          $date = date('d/m/Y G:i:s', time());

    ?>

        <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Datos actualizados al: <? echo $date; ?> hrs. </h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="<?php $_SERVER['PHP_SELF'];?>" class="btn btn-sm btn-neutral">Actualizar información</a>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Registros Totales</h5>
                      <?
                      $users=mysqli_query($con,"SELECT id FROM REGISTRO") or die ("Error de conexión");
                      $total=mysqli_num_rows($users);
                      ?>
                      <span class="h2 font-weight-bold mb-0"><? echo ''.$total.' usuarios'; ?> </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-single-02"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">EDUCACOINS TOTALES</h5>
                      <?
                      $puntos=mysqli_query($con,"SELECT SUM(puntos) FROM INSIGNIAS") or die ("Error de conexión");
                      $coin=mysqli_fetch_array($puntos);
                      $coins=$coin['SUM(puntos)'];
                      ?>
                      <span class="h2 font-weight-bold mb-0"><? echo ''.$coins.' puntos' ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape text-white rounded-circle shadow">
                        <img class="coin" src="../assets/img/coin.png"></img><!--<i class="ni ni-money-coins"></i>-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Insignias Totales</h5>
                      <?
                      $insignias=mysqli_query($con,"SELECT id FROM INSIGNIAS") or die ("Error de conexión");
                      $totalin=mysqli_num_rows($insignias);
                      ?>
                      <span class="h2 font-weight-bold mb-0"><? echo ''.$totalin.' insignias' ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-favourite-28"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Insignias Innovación</h5>
                      <?
                      $innova=mysqli_query($con,"SELECT id FROM INSIGNIAS where insignia=1") or die ("Error de conexión");
                      $totalinova=mysqli_num_rows($innova);
                      ?>
                      <span class="h2 font-weight-bold mb-0"><? echo ''.$totalinova.' insignias'; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-yellow text-black rounded-circle shadow">
                        <i class="ni ni-bulb-61"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Insignias Empatía</h5>
                      <?
                      $empatia=mysqli_query($con,"SELECT id FROM INSIGNIAS where insignia=2") or die ("Error de conexión");
                      $totalempatia=mysqli_num_rows($empatia);
                      ?>
                      <span class="h2 font-weight-bold mb-0"><? echo ''.$totalempatia.' insignias'; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-favourite-28"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Insignias Alianzas</h5>
                      <?
                      $alianza=mysqli_query($con,"SELECT id FROM INSIGNIAS where insignia=3") or die ("Error de conexión");
                      $totalalianza=mysqli_num_rows($alianza);
                      ?>
                      <span class="h2 font-weight-bold mb-0"><? echo ''.$totalalianza.' insignias'; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-world"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8 col-md-8 offset-md-2">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Equivalencia EDUCACOIN</h5>
                      <?
                      $puntos=mysqli_query($con,"SELECT SUM(puntos) FROM INSIGNIAS") or die ("Error de conexión");
                      $coin=mysqli_fetch_array($puntos);
                      $coins=$coin['SUM(puntos)'];
                      $pesos=round(6000/$coins,2,PHP_ROUND_HALF_DOWN);
                      ?>
                      <span class="h2 font-weight-bold mb-0"><? echo '1 EDUCACOIN = '.$pesos.' MXN' ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape text-white rounded-circle shadow">
                        <img class="coin" src="../assets/img/coin.png"></img><!--<i class="ni ni-money-coins"></i>-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>




          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Total de puntos e insignias por emprendimiento</h3>
                </div>
                <!--<div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>-->
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nombre del Emprendimiento</th>
                    <th scope="col">Insignias registradas</th>
                    <th scope="col">EDUCACOINS generados</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <?
                    $datos=mysqli_query($con,"SELECT id,nombre FROM Emprendimientos") or die ("Error de conexión");
                    while ($row = mysqli_fetch_array($datos)) {
                    $nombre=$row['nombre'];
                    $ide=$row['id'];
                    $insignias = mysqli_query($con,"SELECT id FROM INSIGNIAS where id_emprendimiento='$ide'") or die ("Error de conexión");
                    $totalinsignias = mysqli_num_rows($insignias);
                    $punto = mysqli_query($con,"SELECT SUM(puntos) FROM INSIGNIAS where id_emprendimiento='$ide'") or die ("Error de conexión");
                    $totalcoins = mysqli_fetch_array($punto);
                    $totalcoin = $totalcoins['SUM(puntos)']; 
                    echo '<tr>
                    <th scope="row">
                    '.$nombre.'
                    </th>
                    <td style="font-size:1rem!important;">
                    '.$totalinsignias.'
                    </td>
                    <td style="font-size:1.4rem!important;">
                     <div class="icon icon-shape text-white rounded-circle shadow">
                        <img class="coin" src="../assets/img/coin.png"></img><!--<i class="ni ni-money-coins"></i>-->
                      </div>
                      '.$totalcoin.' = '.$totalcoin*$pesos.' MXN
                    </td>
                  </tr>';
                  }
                  ?>



                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              Fundación EDUCA, Ahorra y Emprende 2020 
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>

<script>
$(document).ready(function () {

   $('#entradafilter').keyup(function () {
      var rex = new RegExp($(this).val(), 'i');
        $('.list tr').hide();
        $('.list tr').filter(function () {
            return rex.test($(this).text());
        }).show();

        })

});
</script>

</body>

</html>
