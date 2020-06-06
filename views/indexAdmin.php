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
  <!-- META NOMBRE -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--letras -->
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
            <a href="https://www.usc.edu.co/indexAdmin.php" target="_bank"><img src="../images/logo.png"></img></a>
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
    <!-- LOGO -->
    <div class="container logo-wrap">
      <div class="row pt-5">
        <div class="col-12 text-center">
          <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
          <h1 class="site-logo"><a href="indexAdmin.php">Tienda Santiaguina</a></h1>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-md  navbar-light bg-light">

      <div class="container">
        <div class="collapse navbar-collapse" id="navbarMenu">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link active" href="indexAdmin.php">Inicio</a>
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
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
              <div class="dropdown-menu" aria-labelledby="dropdown05">
                <a class="dropdown-item" href="crearNuevo.php">Agregar nuevo</a>
                <a class="dropdown-item" href="productos.php">Ver bodega</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clientes.php">Clientes</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- END header -->

  <section class="site-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="owl-carousel owl-theme home-slider">
            <div>
              <a class="a-block d-flex align-items-center height-lg" style="background-image: url('../images/Tienda.jpg'); ">
                <div class="text half-to-full">
                  <div class="post-meta">
                    <span class="category">Lugar</span>
                    <span class="mr-2">
                      <script>
                        document.write(fecha);
                      </script>
                    </span>
                  </div>
                  <h3>¡Con estilo santiaguino!</h3>
                  <p>Ven a conocer el mejor estilo santiaguino en la Tienda de la USC, ubicada entre los bloque 1 y 2.</p>
                </div>
              </a>
            </div>
            <div>
              <a class="a-block d-flex align-items-center height-lg" style="background-image: url('../images/parte9.jpeg'); ">
                <div class="text half-to-full">
                  <div class="post-meta">
                    <span class="category">Lugar</span>
                    <span class="mr-2">
                      <script>
                        document.write(fecha);
                      </script>
                    </span>
                  </div>
                  <h3>¡Con estilo santiaguino!</h3>
                  <p>Ven a conocer el mejor estilo santiaguino en la Tienda de la USC, ubicada entre los bloque 1 y 2.</p>
                </div>
              </a>
            </div>
            <div>
              <a class="a-block d-flex align-items-center height-lg" style="background-image: url('../images/parte2.jpeg'); ">
                <div class="text half-to-full">
                  <div class="post-meta">
                    <span class="category">Lugar</span>
                    <span class="mr-2">
                      <script>
                        document.write(fecha);
                      </script>
                    </span>
                  </div>
                  <h3>¡Con estilo santiaguino!</h3>
                  <p>Ven a conocer el mejor estilo santiaguino en la Tienda de la USC, ubicada entre los bloque 1 y 2.</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4">
          <a class="a-block d-flex align-items-center height-md" style="background-image: url('../images/modela2.png');">
            <div class="text">
              <div class="post-meta">
                <span class="category">Novedades</span>
                <span class="mr-2">
                  <script>
                    document.write(fecha);
                  </script>
                </span>
              </div>
              <h3>Todos tengamos estilo santiaguino</h3>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="a-block d-flex align-items-center height-md" style="background-image: url('../images/modela1.png'); ">
            <div class="text">
              <div class="post-meta">
                <span class="category">Novedades</span>
                <span class="mr-2">
                  <script>
                    document.write(fecha);
                  </script>
                </span>
              </div>
              <h3>Todos tengamos estilo santiaguino</h3>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="a-block d-flex align-items-center height-md" style="background-image: url('../images/modelo3.png'); ">
            <div class="text">
              <div class="post-meta">
                <span class="category">Novedades</span>
                <span class="mr-2">
                  <script>
                    document.write(fecha);
                  </script>
                </span>
              </div>
              <h3>Todos tengamos estilo santiaguino</h3>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <section class="site-section py-sm">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="mb-4">Categoria Santiaguina</h2>
        </div>
      </div>
      <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
          <div class="row">
            <div class="col-md-6">
              <a href="shirt.php" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="../images/parte8.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="category">Camisas</span>
                    <span class="mr-2">
                      <script>
                        document.write(fecha);
                      </script>
                    </span>
                  </div>
                  <h2>Hay una nueva forma de verte con estilo santiaguino</h2>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="category.php" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="../images/parte4.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="category">Uniformes</span>
                    <span class="mr-2">
                      <script>
                        document.write(fecha);
                      </script>
                    </span>
                  </div>
                  <h2>Hay una nueva forma de verte con estilo santiaguino</h2>
                </div>
              </a>
            </div>

            <div class="col-md-6">
              <a href="cap.php" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="../images/gorras.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="category">Gorras</span>
                    <span class="mr-2">
                      <script>
                        document.write(fecha);
                      </script>
                    </span>
                  </div>
                  <h2>Hay una nueva forma de verte con estilo santiaguino</h2>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="sweatshirt.php" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="../images/parte7.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="category">sudaderas</span>
                    <span class="mr-2">
                      <script>
                        document.write(fecha);
                      </script>
                    </span>
                  </div>
                  <h2>Hay una nueva forma de verte con estilo santiaguino</h2>
                </div>
              </a>
            </div>
          </div>
          <div align="center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/vJ8NDxlCEms" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>

        <!-- END main-content -->

        <div class="col-md-12 col-lg-4 sidebar">

          <div class="sidebar-box">

            <div class="tab">
              <button class="tablinks" onclick="openCity(event, 'London')">Estudiante</button>
              <button class="tablinks" onclick="openCity(event, 'Paris')">Administrador</button>

            </div>
            <div id="London" class="tabcontent">
              <div class="bio text-center">
                <form action="../controllers/comprobarLogin.php" method="post" class="form-signin">
                  <img src="../images/login.png" alt="Image Placeholder" class="img-fluid">
                  <div class="bio-body">
                    <?php
                    if (!isset($_SESSION['usuario'])) {
                      echo "<h2>Inicie sesión como Estudiante</h2>";
                      echo "<p>";
                      echo "Nombre de usuario:<input type='text' name='username'  required=true autofocus>";
                      echo "Contraseña:<input type='password' name='password'  required=true>";
                      echo "</p>";
                      echo " <p><button type='submit' class='button button-block' name='reg'>Iniciar</button></p>";
                      echo "<p><a href='login.php' class='btn btn-primary btn-sm' bac>Registrarse</a></p>";
                    } else {
                      echo "Bienvenido " . $_SESSION['usuario'];
                    }
                    ?>

                  </div>
                </form>
              </div>
            </div>

            <div id="Paris" class="tabcontent">
              <div class="bio text-center">
                <form action="../controllers/comprobarLogin.php" method="post" class="form-signin">
                  <img src="../images/login.png" alt="Image Placeholder" class="img-fluid">
                  <div class="bio-body">
                    <?php
                    if (!isset($_SESSION['usuario'])) {
                      echo "<h2>Inicie sesión como Admin</h2>";
                      echo "<p>";
                      echo "Nombre de usuario:<input type='text' name='username'  required=true autofocus>";
                      echo "Contraseña:<input type='password' name='password'  required=true>";
                      echo "</p>";
                      echo " <p><button type='submit' class='button button-block' name='reg' href='indexAdmin.php'>Iniciar</button></p>";
                      echo "<p><a href='login.php' class='btn btn-primary btn-sm' bac>Registrarse</a></p>";
                    } else {
                      echo "Bienvenido " . $_SESSION['usuario'];
                    }
                    ?>

                  </div>
                </form>
              </div>
            </div>
          </div>

          <script>
            function openCity(evt, cityName) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(cityName).style.display = "block";
              evt.currentTarget.className += " active";
            }
          </script>
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
        <!-- END sidebar-box -->

        <div class="sidebar-box">
          <h3 class="heading">Ubicate</h3>
          <a href="maps.php" class="blog-entry element-animate" data-animate-effect="fadeIn">
            <img src="../images/mapa.png" alt="Image placeholder">
            <div class="blog-content-body">
              <div class="post-meta">
                <span class="category">Ubicate</span>
                <span class="mr-2">
                  <script>
                    document.write(fecha);
                  </script>
                </span>
              </div>
              <h2>Como llegar a la tienda Santiaguina</h2>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>


  <a class='flotante btn btn-primary btn-sm' href='../controlador/cerrarSesion.php' type='submit' name='send'>Cerrar</a>

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