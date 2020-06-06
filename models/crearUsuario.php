<?php

try {
	$base->query("INSERT INTO usuarios VALUES (NULL, '{$correoRegistro}', '{$contrasenia1}', '{$nombreRegistro}', '{$apellidoRegistro}', '{$nombreUsuario}', '1')");

	session_start();
	$_SESSION['usuario'] = $nombreUsuario;
	$_SESSION['admin'] = false;
	header("Location: ../views/index.php");
} catch (Exception $e) {
	if ($e->getcode() == 23000) {
		echo '<script type="text/javascript">
    				alert("El usuario ya existe.");
    				window.location.href="../views/register.php";
    			</script>';
	} else {
		echo $e;
	}
}
