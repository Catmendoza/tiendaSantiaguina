<?php 

	include("../models/usuarioModelo.php");

	$usuario=new usuarioModelo();
	$matrizUsuario=$usuario->get_usuario();

	include("../views/comprobarLogin.php");
