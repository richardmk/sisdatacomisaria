<?php 

	require_once "../conexion/Conexion.php";

	class Inicio{

		public function mostrar_total(){
			$sql ="SELECT COUNT(tipo_denuncia) FROM tipo_denuncias";
			 return ejecutarConsulta($sql);
		}

	}

?>