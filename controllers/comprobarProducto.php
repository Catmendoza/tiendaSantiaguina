<?php

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

require_once("../models/crearProducto.php");

echo '<script type="text/javascript">
window.location.href="../views/crearNuevo.php";
</script>';
