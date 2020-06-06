<?php

$nombreRegistro = $_POST['nombreRegistro'];
$apellidoRegistro = $_POST['apellidoRegistro'];
$correoRegistro = $_POST['correoRegistro'];
$nombreUsuario = $_POST['nombreUsuario'];
$contrasenia1 = $_POST['contrasenia1'];
$contrasenia2 = $_POST['contrasenia2'];

if ($contrasenia1 == $contrasenia2) {
	require_once("../models/crearUsuario.php");

	echo '<script type="text/javascript">
    				window.location.href="../views/index.php";
    			</script>';
} else {
	echo '<script type="text/javascript">
    				alert("las contraseñas no son iguales");
    				window.location.href="../views/login.php";
    			</script>';
}
