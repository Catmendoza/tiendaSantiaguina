<?php
include("conectar.php");

$base = conectar::conexion();
try {
    $base->query("INSERT INTO productos VALUES (NULL, '{$codigo}','{$nombre}',{$cantidad},'{$tipo}',{$precio})");
} catch (Exception $e) {
    if ($e->getcode() == 23000) {
        echo '<script type="text/javascript">
    				alert("El producto ya existe.");
    				window.location.href="../views/crearNuevo.php";
    			</script>';
    } else {
        echo $e;
    }
}
