<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
?>

<!doctype html>
<html lang="en">

<head>
  <title>Tienda santiaguina</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">

  <link rel="stylesheet" href="../fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="../css/style.css">
  <script>
    var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    var f = new Date();
    var fecha = f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear();
  </script>
</head>

<body>



  <header role="banner">
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-9 social">
            <a href="https://twitter.com/usantiagodecali?lang=en" target="_bank"><span class="fa fa-twitter"></span></a>
            <a href="https://es-la.facebook.com/usantiagodecali/" target="_bank"><span class="fa fa-facebook"></span></a>
            <a href="https://www.instagram.com/usantiagodecali/?hl=en" target="_bank"><span class="fa fa-instagram"></span></a>
            <a href="https://www.usc.edu.co/index.php" target="_bank"><img src="../images/logo.png"></img></a>
          </div>
          <div class="col-3 search-top">
            <!-- <a href="#"><span class="fa fa-search"></span></a> -->
            <form action="#" class="search-top-form">
              <span class="icon fa fa-search"></span>
              <input type="text" id="s" placeholder="Busca tu articulo...">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container logo-wrap">
      <div class="row pt-5">
        <div class="col-12 text-center">
          <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
          <h1 class="site-logo"><a href="index.php">Tienda Santiaguina</a></h1>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-md  navbar-light bg-light">
      <div class="container">


        <div class="collapse navbar-collapse" id="navbarMenu">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
              <div class="dropdown-menu" aria-labelledby="dropdown05">
                <a class="dropdown-item" href="shirt.php">Camisas</a>
                <a class="dropdown-item" href="sweatshirt.php">Sudaderas</a>
                <a class="dropdown-item" href="cap.php">Gorras</a>
                <a class="dropdown-item" href="category.php">Uniformes</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">Conocenos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contactanos</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>
  <!-- END header -->


  <section class="site-section">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-6">
          <h2 class="mb-4">Categoria: Camisas</h2>
        </div>
      </div>
      <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
          <div class="row mb-5 mt-5">

            <div class="col-md-12">

              <div class="post-entry-horzontal">
                <a href="#">
                  <div class="image element-animate" data-animate-effect="fadeIn">
                    <img src="../images/camisas1.png" onmouseover="this.width=500;this.height=400;" onmouseout="this.width=200;this.height=150;" width="200" height="150" />
                  </div>
                  <span class="text">
                    <div class="post-meta">
                      <span class="category">Camisas</span>
                      <span class="mr-2">
                        <script>
                          document.write(fecha);
                        </script>
                      </span>
                    </div>
                    <h2>Camisas Santiaguinas negras</h2>
                    <h2>Cantidad: 30</h2>
                    <h3>Precio: $90.000</h3>
                    <h2><a href="#" class="btn btn-primary btn-sm">Comprar</a></h2>
                  </span>
                </a>
              </div>
              <!-- END post -->

              <div class="post-entry-horzontal">
                <a href="#">
                  <div class="image element-animate" data-animate-effect="fadeIn">
                    <img src="../images/camisas2.png" onmouseover="this.width=500;this.height=400;" onmouseout="this.width=200;this.height=150;" width="200" height="150" />
                  </div>
                  <span class="text">
                    <div class="post-meta">
                      <span class="category">Camisas</span>
                      <span class="mr-2">
                        <script>
                          document.write(fecha);
                        </script>
                      </span>
                    </div>
                    <h2>Camisas Santiaguinas azules</h2>
                    <h2>Cantidad: 15</h2>
                    <h3>Precio: $95.000</h3>
                    <h2><a href="#" class="btn btn-primary btn-sm">Comprar</a></h2>
                  </span>
                </a>
              </div>
              <!-- END post -->

              <div class="post-entry-horzontal">
                <a href="#">
                  <div class="image element-animate" data-animate-effect="fadeIn">
                    <img src="../images/camisas3.png" onmouseover="this.width=500;this.height=400;" onmouseout="this.width=200;this.height=150;" width="200" height="150" />
                  </div>
                  <span class="text">
                    <div class="post-meta">
                      <span class="category">Camisa</span>
                      <span class="mr-2">
                        <script>
                          document.write(fecha);
                        </script>
                      </span>
                    </div>
                    <h2>Camisas Santiaguinas rojas</h2>
                    <h2>Cantidad: 10</h2>
                    <h3>Precio: $90.000</h3>
                    <h2><a href="#" class="btn btn-primary btn-sm">Comprar</a></h2>
                  </span>
                </a>
              </div>

            </div>
          </div>
        </div>


        <div class="col-md-12 col-lg-4 sidebar">

          <div class="sidebar-box">
            <div class="bio text-center">
              <img src="../images/login.png" alt="Image Placeholder" class="img-fluid">
              <div class="bio-body">
                <h2>Inicie sesión</h2>
                <p>
                  Nombre de usuario:<input type="Usuario" name="user" minlength="10" required=true>
                  Contraseña:<input type="contraseña" name="direccion" minlength="10" required=true>
                </p>
                <p><a href="#" class="btn btn-primary btn-sm">Ingresar</a></p>
                <p><a href="login.php" class="btn btn-primary btn-sm" bac>Registrarse</a></p>
              </div>
            </div>
          </div>
          <div class="sidebar-box">
            <h3 class="heading">Eventos</h3>
            <div class="post-entry-sidebar">
              <ul>
                <li>
                  <a href="../images/lanza.png">
                    <img src="../images/lanza.png" alt="Image placeholder" class="mr-4">
                    <div class="text">
                      <h4>Lanzamiento de la Tercera coleccion de la tienda Santiaguina</h4>
                      <div class="post-meta">
                        <span class="mr-2">
                          <script>
                            document.write(fecha);
                          </script>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="../images/bata.png">
                    <img src="../images/bata.png" alt="Image placeholder" class="mr-4">
                    <div class="text">
                      <h4>Lanzamiento de las batas Santiaguinas</h4>
                      <div class="post-meta">
                        <span class="mr-2">
                          <script>
                            document.write(fecha);
                          </script>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="../images/gor.png">
                    <img src="../images/gor.png" alt="Image placeholder" class="mr-4">
                    <div class="text">
                      <h4>Descuentos en gorras Santiaguinas</h4>
                      <div class="post-meta">
                        <span class="mr-2">
                          <script>
                            document.write(fecha);
                          </script>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <footer class="page-footer font-small unique-color-dark pt-4">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
      Copyright &copy;<script>
        document.write(new Date().getFullYear());
      </script><a> por Catalina Mendoza</a> </div>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- END footer -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" /></svg></div>

  <script src="../js/jquery-3.2.1.min.js"></script>
  <script src="../js/jquery-migrate-3.0.0.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/main.js"></script>
</body>

</html>