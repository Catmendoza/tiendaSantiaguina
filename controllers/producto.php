<?php
require_once("../models/conectar.php");
$consulta = conectar::conexion()->query("SELECT * FROM productos");

while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $filas['cod_pro'] . "</td>";
    echo "<td>" . $filas['nom_pro'] . "</td>";
    echo "<td>" . $filas['tip_pro'] . "</td>";
    echo "<td>" . $filas['can_pro'] . "</td>";
    echo "<td>" . $filas['pre_pro'] . "</td>";
    echo "</tr>";
}
