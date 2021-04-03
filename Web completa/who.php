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

    <!-- Quiené? -->
    <section class="p-3" style="background-color: azure;">
      <h3 class="font-weight-bold text-center dark-grey-text pb-2">Nuestra historia</h3>
    <hr class="w-header my-4">
    <p class="lead text-center text-muted pt-2 mb-5">Macrosoft fue creada para ayudar a convertir tus ideas en realidad.</p>
    
    <div class="row">
      <div class="col-lg-8 mx-auto">

        <ol class="timeline">
          <li class="timeline-element">
            <h5 class="font-weight-bold dark-grey-text mb-3">Se lanza la web</h5>
            <p class="grey-text font-small"><time datetime="2020-01-23">23 Ene 2020</time></p>
            <p class="text-muted">Macrosoft comienza su venta de productos digitales con una tienda online.</p>
          </li>

          <li class="timeline-element">
            <h5 class="font-weight-bold dark-grey-text mb-3">Primeros 1000 clientes</h5>
            <p class="grey-text font-small"><time datetime="2020-02-17">17 Feb 2020</time></p>
            <p class="text-muted">Conseguimos una aceptación en poco tiempo y empezamos a plantear la idea de ofrecer servicios de hosting.</p>
          </li>

          <li class="timeline-element">
            <h5 class="font-weight-bold dark-grey-text mb-3">Presentamos Macrosoft Hosting</h5>
            <p class="grey-text font-small"><time datetime="2020-05-26">26 May 2020</time></p>
            <p><img class="img-thumbnail rounded" src="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(6).jpg" alt="Pantalla de ordenador con código" style="max-width: 290px; max-height: 250px;"></p>
            <p class="text-muted">Era el momento idóneo y siguiendo nuestro roadmap conseguimos ofrecer a todos nuestros clientes un hosting de alto rendimiento a un precio competitivo.</p>
          </li>

          <li class="timeline-element">
            <h5 class="font-weight-bold dark-grey-text mb-3">El equipo crece</h5>
            <p class="grey-text font-small"><time datetime="2021-04-02">02 Abr 2021</time></p>
            <p class="text-muted">Poco más de un año estamos contentos con los resultados y queremos continuar mejorando aumentando nuestra plantilla con otros 30 compañeros.</p>
          </li>
        </ol>

      </div>
    </div>
    </section>

      <!-- Banner -->
      <section class="p-3 text-center align-text-bottom text-white"
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