<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
?>

<!doctype html>
<html lang="en">

<head>
  <title>Tienda Santiaguina</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/style.css">

  <!-- fecha actual-->
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
          <div class="col-3 align-slef-center search-top">
            <form action="#" class="search-top-form">
              <span class="icon fa fa-search"></span>
              <!--<span class="fa fa-user"></span></a> -->
              <!-- placeholder es la informacion que habra ahi -->
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
              <a class="nav-link active" href="index.php">Inicio</a>
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

  <section class="site-section py-lg">
    <div class="container">

      <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
          <h1 class="mb-4">Así encontrarás nuestra tienda más fácil</h1>
          <div class="post-meta">
            <span class="category">Ubicación</span>
            <span class="mr-2">
              <script>
                document.write(fecha);
              </script>
            </span>
          </div>
          <div class="post-content-body">
            <a href="../images/MAPA_CIUDADELA_PAMPALINDA.jpg" data-lightbox="image-1">
              <img src="../images/MAPA_CIUDADELA_PAMPALINDA.jpg" width="700" class="alignleft" alt="Mi foto." />
            </a>
            <p>La tienda Santiaguina se encuentra en el mapa en la letra B.</p>
          </div>

          <div class="pt-5">

            <!-- END comment-list -->

            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Deja tu comentario</h3>
              <form action="#" class="p-5 bg-light">
                <div class="form-group">
                  <label for="name">Nombre *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="message">Mensaje</label>
                  <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Enviar" class="btn btn-primary">
                </div>

              </form>
            </div>
          </div>

        </div>


        <div class="col-md-12 col-lg-4 sidebar">
          <div class="sidebar-box search-form-wrap">
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
            <!-- END sidebar-box -->
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