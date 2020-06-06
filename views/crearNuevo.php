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
    <link rel="stylesheet" href="../css/style1.css">
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
                            <a class="nav-link" href="indexAdmin.php">Inicio</a>
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
                            <a class="nav-link " href="contact.php">Contactanos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown05">
                                <a class="dropdown-item active" href="crearNuevo.php">Agregar nuevo</a>
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

    <div class="form">
        <ul class="tab-group">
            <li class="tab active">
                <p>
                    <h1>Registro de producto</h1>
                </p>
            </li>
        </ul>
        <div class="registro">
            <div id="">

                <form action="../controllers/comprobarProducto.php" method="post" class="form-signin">
                    <div class="top-row">
                        <div class="field-wrap">

                            <input type="text" required autocomplete="off" placeholder="Codigo" name="codigo" />
                        </div>
                        <div class="field-wrap">

                            <input type="text" required placeholder="Nombre" name="nombre" />
                        </div>
                        <div class="field-wrap">
                            <select class="select" type="text" name="tipo" id="tipo" required>
                                <option value="primero" disabled selected>
                                    Tipo
                                </option>
                                <option value="camisas">Camisas</option>
                                <option value="sudaderas">Sudaderas</option>
                                <option value="gorras">Gorras</option>
                                <option value="uniforme">Uniformes</option>
                            </select>
                        </div>
                    </div>

                    <div class="top-row">
                        <div class="field-wrap">

                            <input type="number" required placeholder="Precio" name="precio" />
                        </div>
                        <div class="field-wrap">

                            <input type="number" required placeholder="Cantidad" name="cantidad" />
                        </div>
                    </div>
                    <div class="top-row-button">
                        <div>
                            <button class="buttonss buttonss-block" name="limpiar">Limpiar</button>
                        </div>
                        <div>
                            <button type="submit" class="buttons buttons-block" name="reg">Guardar</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

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
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>