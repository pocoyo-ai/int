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

    <title>Macrosoft - ¡Nueva apertura!</title>
    
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
                <a class="nav-link active" aria-current="" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="" href="hosting.php">Hosting</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="" href="#">Tienda</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="buttondropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Usuario
                </a>
                <ul class="dropdown-menu" aria-labelledby="buttondropdown">
                <li><a class="dropdown-item" href="login.php">Iniciar sesión</a></li>
                <li><a class="dropdown-item" href="register.php">Registrarse</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="contact.php">Soporte técnico</a></li>
                </ul>
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

    <!-- Servicios -->
    <section class="services pt-20 pb-20" id="services">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-20">
                     <h4>Servicios</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <!-- Diseño -->
                  <div class="single-service">
                     <i class="fa fa-laptop"></i>
                     <h4>Diseño Web</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <!-- Hosting -->
                  <div class="single-service">
                     <i class="fa fa-gears"></i>
                     <h4>Hosting</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <!-- Marketplace -->
                  <div class="single-service">
                     <i class="fa fa-shopping-cart"></i>
                     <h4>Marketplace</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
            </div>
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