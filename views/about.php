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

  <!-- Theme Style -->
  <link rel="stylesheet" href="../css/style.css">
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
              <a class="nav-link active" href="about.php">Conocenos</a>
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
      <div class="col-md-12">
        <h2 class="mb-4" align="center">Misión</h2>
        <p align="center">Ofrecer a nuestros clientes productos de calidad, a precios cómodos que cumplan con sus necesidades y exigencias, abarcando sus gustos de acuerdo a su estilo Santiaguino.</p>
        <h2 class="mb-4" align="center">Visión</h2>
        <p align="center">Ser reconocida en la venta de uniformes y ropa de la universidad Santiago de Cali, proporcionando cada día más un servicio de excelencia a nuestros clientes y que al mismo tiempo nos permitan tener una buena referencia de nuestros clientes.</p>
        <hr><br>
        <h2 class="mb-4" align="center">Nosotros</h2></br></hr>
        <table align="center">
          <tr>
            <th>Cédula</th>
            <td>1193578869</td>
            <td rowspan="7">
              <a href="../images/yo.jpg" data-lightbox="image-1">
                <img src="../images/yo.jpg" width="100" class="alignleft" alt="Mi foto." />
              </a>
            </td>
          </tr>
          <tr>
            <th>Apellidos</th>
            <td>Mendoza Alvarez</td>
          </tr>
          <tr>
            <th>Nombre</th>
            <td>Catalina</td>
          </tr>
          <tr>
            <th>Nacionalidad</th>
            <td>Colombiana</td>
          </tr>
          <tr>
            <th>Lugar de Nacimiento</th>
            <td>Cali</td>
          </tr>
          <tr>
            <th>Fecha de Nacimiento</th>
            <td>27 de marzo del 2001</td>
          </tr>
          <tr>
            <th>E-mail</th>
            <td>catalina.mendoza00@usc.edu.co</td>
          </tr>
        </table>
      </div>
  </section>


  <footer class="page-footer font-small unique-color-dark pt-4">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
      Copyright &copy;<script>
        document.write(new Date().getFullYear());
      </script><a> por Catalina Mendoza</a>
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
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>


  <script src="../js/main.js"></script>
</body>

</html>