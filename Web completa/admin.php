<?php
include "./conf/database.php";
include "restricted.php";
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="./bs-icons/bootstrap-icons.css">
   
    <!-- Main CSS -->
    <link href="styles.css" rel="stylesheet">
    <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,800,900%7cRaleway:300,400,500,600,700" rel="stylesheet">

    <!-- Jquery -->
    <script src="http//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="./adm.js"></script>

    <title>Macrosoft - Panel de Administración</title>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container">
            <a class="navbar-brand"><img src="./img/logo.png" class="macrosoft"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-collap" aria-controls="nav-collap" aria-expanded="false" aria-label="Recoger navegación"> 
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav-collap">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="" href="hosting.php">Hosting</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="" href="#">Tienda</a>
            </li>
            <!-- Dropdown con PHP -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="buttondropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="./img/gradient-01.jpg" class="rounded-circle" width="12" height="12" alt="" loading="lazy"/>
                <?php
                  $sql = "SELECT * FROM users";
                  $result = mysqli_query($link,$sql);
                  if ($r = mysqli_fetch_array($result))
                  {
                      echo $r['name'];
                  }
                ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="buttondropdown">
                <li><a class="dropdown-item active" href="login.php">Iniciar sesión</a></li>
                <li><a class="dropdown-item" href="register.php">Registrarse</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="contact.php">Soporte técnico</a></li>
                </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="logout.php" style="color:tomato">Desconectar</a></div>
            </li>
            </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="4000">
            <img src="./img/3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="./img/2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="./img/3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="./img/2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel end -->
  </head>
  <body>

    <!-- Panel -->
    <section id="panel">
        <!-- Perfil -->
        <div class="card testimonial-card">

            <!-- Color -->
            <div class="card-up warning-color-dark p-3 white-text text-end">
              <p class="font-weight-normal mb-0">
              <?php
                  $sql = "SELECT * FROM users";
                  $result = mysqli_query($link,$sql);
                  if($r = mysqli_fetch_array($result))
                  {
                      echo 'Usuario: ';
                      echo $r['name'];
                  }
                ?>
              </p>
              <p class="small mb-0">
              <?php
                  $sql = "SELECT * FROM users";
                  $result = mysqli_query($link,$sql);
                  if($r = mysqli_fetch_array($result))
                  {
                      echo 'Correo: ';
                      echo $r['email'];
                  }
                ?>
              </p>
              <a class="nav-link" style="padding:0px" href="logout.php" style="color:tomato">Desconectar</a>
            </div>

            <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">Admin</h6>      
            <!-- Foto -->
            <div class="avatar mx-auto white">
              <img src="./img/gradient-01.jpg" width="150" height="150" class="rounded-circle" alt="woman avatar">
            </div>

            <!-- Contenido -->
            <div class="card-body px-3 py-4">
              <div class="row">
                <div class="col-4 text-center">
                  <p class="font-weight-bold mb-0">5300</p>
                  <p class="small text-uppercase mb-0">Ventas</p>
                </div>
                <div class="col-4 text-center border-left border-right">
                  <p class="font-weight-bold mb-0">3600</p>
                  <p class="small text-uppercase mb-0">Clientes</p>
                </div>
                <div class="col-4 text-center">
                  <p class="font-weight-bold mb-0">122</p>
                  <p class="small text-uppercase mb-0">Productos</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Estadisticas -->
          <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card mt-3">

              <div class="">
                <i class="far fa-money-bill-alt fa-lg primary-color z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                <div class="float-right text-right p-3">
                  <p class="text-uppercase text-muted mb-1"><small>Beneficio</small></p>
                  <h4 class="font-weight-bold mb-0">23.000 €</h4>
                </div>
              </div>

              <div class="card-body pt-0">
                <div class="progress md-progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
                <p class="card-text">Mejor que el último mes (75%)</p>
              </div>

            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <!-- Admin card -->
            <div class="card mt-3">

              <div class="">
                <i class="fas fa-chart-line fa-lg teal z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                <div class="float-right text-right p-3">
                  <p class="text-uppercase text-muted mb-1"><small>Pérdidas</small></p>
                  <h4 class="font-weight-bold mb-0">-3534 €</h4>
                </div>
              </div>

              <div class="card-body pt-0">
                <div class="progress md-progress">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 15.36%" aria-valuenow="15.36" aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
                <p class="card-text">Pérdidas en el último día (15.36%)</p>
              </div>

            </div>

          </div>

          <div class="col-lg-4 col-md-6 mb-4">

            <!-- Admin card -->
            <div class="card mt-3">

              <div class="">
                <i class="fas fa-chart-pie fa-lg purple z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                <div class="float-right text-right p-3">
                  <p class="text-uppercase text-muted mb-1"><small>Tráfico</small></p>
                  <h4 class="font-weight-bold mb-0">65.234</h4>
                </div>
              </div>

              <div class="card-body pt-0">
                <div class="progress md-progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
                <p class="card-text">Mejor que la última semana (28%)</p>
              </div>

            </div>
            <!-- Admin card -->

          </div>
          <!--Grid column-->

          </div>
      </section>

      <!-- Banner -->
      <section class="p-3 text-center align-text-bottom text-white mask rgba-black-strong"
        style="background-image: url(./img/gradient-01.jpg);">
        <div class="row d-flex justify-content-center">
          <div class="col-xl-8 col-md-10">
              <i class="fas fa-gem fa-2x mb-4"></i>
              <a href="#" class="btn btn-outline-white btn-md waves-effect text-white" role="button">Ir a la tienda<i class="bi bi-door-closed"></i></a>
          </div>
        </div>
      </section>

    <!-- Bootstrap Bundle y Popper -->
    <script src="./js/bootstrap.bundle.min.js"></script>
    
  </body>
      <!-- Pie de página -->
  <footer>
      <!-- Map -->
    <div class="banner bg-dark text-white">
        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 300px">
          <iframe src="https://maps.google.com/maps?q=ies+el+rincon&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
            style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    <div class="footer-dark">
        <div class="container-foot">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Servicios</h3>
                    <ul>
                        <li><a href="index.php">Diseño</a></li>
                        <li><a href="hosting.php">Hosting</a></li>
                        <li><a href="#">Venta</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>Nosotros</h3>
                    <ul>
                        <li><a href="who.php">Compañia</a></li>
                        <li><a href="contact.php">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Macrosoft</h3>
                    <p>Microsoft Corporation es una empresa de tecnología multinacional canaria con sede en Guayadeque, Washington. Desarrolla, fabrica, otorga licencias, respalda y vende software de computadora, electrónica de consumo, computadoras personales y servicios relacionados.</p>
                </div>
                <div class="col item social"><a href="www.facebook.com"><i class="bi bi-facebook"></i></a><a href="www.twitter.com"><i class="bi bi-twitter"></i></a><a href="www.linkedin.com"><i class="bi bi-linkedin"></i></a><a href="www.instagram.com"><i class="bi bi-instagram"></i></a></div>
            </div>
            <p class="copyright">Macrosoft © 2021 ~ Developed by Eros</p>
        </div>
    </div>
  </footer>
</html>