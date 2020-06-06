<?php
include("../models/conectar.php");

$base = conectar::conexion();
$username = $_POST['username'];
$password = $_POST['password'];

$exists = false;

$matrizUsuario = $base->query("SELECT * from usuarios");

foreach ($matrizUsuario as $registro) {
  if ($registro["use_usu"] == $username && $registro["con_usu"] == $password) {
    $exists = true;
    session_start();
    $_SESSION['usuario'] = $registro['use_usu'];
    $_SESSION['foto'] = $registro['cor_usu'];
  } else if ($registro["adm_usu"] == $username && $registro["pas_usu"] == $password) {
    $exists = true;
    session_start();
    $_SESSION['usuario'] = $registro['adm_usu'];
    $_SESSION['foto'] = $registro['cor_usu'];
  }
}

if ($exists == true) {

  header("Location: ../views/index.php");
} else {

  echo '<script type="text/javascript">
            alert("No se encuentra en nuestra base de datos.");
            window.location.href="../views/index.php";
          </script>';
}
