<?php
require_once("../models/conectar.php");
$consulta = conectar::conexion()->query("SELECT * FROM usuarios");
$valor = 1;
while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $filas['id_usu'] . "</td>";
    echo "<td>" . $filas['nom_usu'] . "</td>";
    echo "<td>" . $filas['ape_usu'] . "</td>";
    echo "<td>" . $filas['cor_usu'] . "</td>";
    echo "<td>" . $filas['use_usu'] . "</td>";
    echo "<td>" . $filas['con_usu'] . "</td>";
    if ($filas["adm_pro"] == $valor) {
        $aux = 'Estudiante';
        echo "<td>" . $aux . "</td>";
    } else {
        $aux = 'Admin';
        echo "<td>" . $aux . "</td>";
    }
    echo "</tr>";
}
