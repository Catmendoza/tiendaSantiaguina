<?php

$nombreRegistroA = $_POST['nombreRegistro'];
$apellidoRegistroA = $_POST['apellidoRegistro'];
$correoRegistroA = $_POST['correoRegistro'];
$usuarioAdmin = $_POST['usuarioAdmin'];
$contrasenia1A = $_POST['contrasenia1'];
$contrasenia2A = $_POST['contrasenia2'];

if ($contrasenia1A == $contrasenia2A) {
	require_once("../models/crearAdmin.php");

	echo '<script type="text/javascript">
    				window.location.href="../views/index.php";
    			</script>';
} else {
	echo '<script type="text/javascript">
    				alert("las contraseñas no son iguales");
    				window.location.href="../views/registroAdmin.php";
    			</script>';
}
