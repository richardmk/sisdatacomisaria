<?php 

	require_once '../conexion/Conexion.php';


	class Denuncias{
		public function insertar($usuario_registro,$fecha_registro,$hora_registro,$contenido,$tipo_denuncia,$personal_acargo,$ubicacion,$denunciante,$denunciado,$ubicacion_detalle)
		{
			$sql="INSERT INTO denuncias(usuario_registro,fecha_registro,hora_registro,contenido,tipo_denuncia,personal_acargo,ubicacion,denunciante,denunciado,ubicacion_detalle) 
			VALUES ('$usuario_registro','$fecha_registro','$hora_registro','$contenido','$tipo_denuncia','$personal_acargo','$ubicacion','$denunciante','$denunciado','$ubicacion_detalle') ";
			return ejecutarConsulta($sql);
		}

		public function editar($iddenuncia,$contenido,$tipo_denuncia,$personal_acargo,$ubicacion,$denunciante,$denunciado,$ubicacion_detalle)
		{
			$sql="UPDATE denuncias SET contenido='$contenido',tipo_denuncia='$tipo_denuncia',personal_acargo='$personal_acargo',ubicacion='$ubicacion',denunciante='$denunciante',denunciado='$denunciado',ubicacion_detalle='$ubicacion_detalle' WHERE iddenuncias='$iddenuncia' ";
			return ejecutarConsulta($sql);
		}

		public function mostrar($iddenuncia)
		{
			$sql="SELECT 

				iddenuncias,
				usuario_registro,
				  CONCAT(day(fecha_registro) , ' de ',
				       CASE
				        when month(fecha_registro)=1 then 'Enero'
						when month(fecha_registro)=2 then 'Febrero'
				        when month(fecha_registro)=3 then 'Marzo'
				        when month(fecha_registro)=4 then 'Abril'
				        when month(fecha_registro)=5 then 'Mayo'
				        when month(fecha_registro)=6 then 'Junio'
				        when month(fecha_registro)=7 then 'Julio'
				        when month(fecha_registro)=8 then 'Agosto'
				        when month(fecha_registro)=9 then 'Septiembre'
				        when month(fecha_registro)=10 then 'Octubre'
				        when month(fecha_registro)=11 then 'Noviembre'
				        when month(fecha_registro)=12 then 'Diciembre'
				       END,
							 ' del ' ,year(fecha_registro)) as fecha_registro,

				(time_format(hora_registro, '%H:%i')) as hora_registro,
				contenido,
				tipo_denuncia,
				personal_acargo,
				ubicacion,
				denunciante,
				denunciado,
				ubicacion_detalle

			FROM denuncias 
			WHERE iddenuncias='$iddenuncia' ";

			return ejecutarConsultaSimplefila($sql);

		}

		public function listar ()
		{
			$sql = "SELECT 

				iddenuncias,
				usuario_registro,
				  CONCAT(day(fecha_registro) , ' de ',
				       CASE
				        when month(fecha_registro)=1 then 'Enero'
						when month(fecha_registro)=2 then 'Febrero'
				        when month(fecha_registro)=3 then 'Marzo'
				        when month(fecha_registro)=4 then 'Abril'
				        when month(fecha_registro)=5 then 'Mayo'
				        when month(fecha_registro)=6 then 'Junio'
				        when month(fecha_registro)=7 then 'Julio'
				        when month(fecha_registro)=8 then 'Agosto'
				        when month(fecha_registro)=9 then 'Septiembre'
				        when month(fecha_registro)=10 then 'Octubre'
				        when month(fecha_registro)=11 then 'Noviembre'
				        when month(fecha_registro)=12 then 'Diciembre'
				       END,
							 ' del ' ,year(fecha_registro)) as fecha_registro,

				(time_format(hora_registro, '%H:%i')) as hora_registro,
				contenido,
				tipo_denuncia,
				personal_acargo,
				ubicacion,
				denunciante,
				denunciado,
				ubicacion_detalle
 FROM denuncias ORDER BY denuncias.fecha_registro DESC,hora_registro DESC";
			return ejecutarConsulta($sql);
		}
	}
?>