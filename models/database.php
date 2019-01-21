<?php
	class Database{
		private $server="localhost";
		private $bduser="root";
		private $bdpwd="";
		private $bdname="crud";

		public static function Conectar(){
			try {
				$conexion=new mysqli($server,$bduser,$bdpwd,$bdname);
				if ($conexion->connect_error) {
					die("Error en la conexion" .$conexion->connect_error);
				}else{
					die("Conexion exitosa");
					return $conexion;
				}
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
	}
?>