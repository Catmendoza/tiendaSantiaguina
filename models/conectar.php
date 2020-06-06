<?php 
	
	class conectar{

		public static function conexion(){

			try {

				$conexion=new PDO ("mysql:host=localhost; dbname=tienda_santiaguina", "root", "");
				$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$conexion->exec("SET CHARACTER SET UTF8"); 
				
			} catch (Exception $e) {

				die("ERROR" .$e->getMessage());
 				echo "linea de error" .$e->getLine();
				
			}
			return $conexion;
		}
	}
 ?>