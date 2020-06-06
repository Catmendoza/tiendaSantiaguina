<?php
include("conectar.php");

$base = conectar::conexion();
try {
    $base->query("INSERT INTO usuarios VALUES (NULL,'{$correoRegistroA}', '{$contrasenia1A}', '{$nombreRegistroA}', '{$apellidoRegistroA}', '{$usuarioAdmin}', '0')");

    session_start();
    $_SESSION['usuario'] = $usuarioAdmin;
    $_SESSION['admin'] = true;
    header("Location: ../views/index.php");
} catch (Exception $e) {
    if ($e->getcode() == 23000) {
        echo '<script type="text/javascript">
    				alert("El usuario ya existe.");
    				window.location.href="../views/registroAdmin.php";
    			</script>';
    } else {
        echo $e;
    }
}
