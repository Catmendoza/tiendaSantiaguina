<?php
include("conectar.php");

$base = conectar::conexion();
try {
	$base->query("INSERT INTO usuarios VALUES (NULL, '{$correoRegistro}', '{$contrasenia1}', NULL, NULL, '{$nombreRegistro}', '{$apellidoRegistro}', '{$nombreUsuario}')");

	session_start();
	$_SESSION['usuario'] = $correoRegistro;
	$_SESSION['foto'] = $correoRegistro;
	header("Location: ../views/index.php");
} catch (Exception $e) {
	if ($e->getcode() == 23000) {
		echo '<script type="text/javascript">
    				alert("El usuario ya existe.");
    				window.location.href="../views/login.php";
    			</script>';
	} else {
		echo $e;
	}
}
