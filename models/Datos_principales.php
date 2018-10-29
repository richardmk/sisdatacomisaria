<?php 

	require_once '../conexion/Conexion.php';


	class Datos_principales {

		public function insertar($apellido_paterno,$apellido_materno,$nombres,$fecha_nacimiento,$nro_contacto,$estado_civil,$grupo_sanguineo,$departamento,$provincia,$distrito,$domicilio,$grado,$especialidad,$cip,$codofin,$dni,$fecha_incorporacion_unidad,$oficio,$unidad_procedencia,$tiempo_servicio_general,$fecha_ingreso_pnp,$fecha_egreso_escuela,$fecha_ultimo_ascenso,$departamento_labor,$area_labor,$cargo_labor,$clase_arma,$marca_arma,$serie_arma,$caf_nro)
		{
			$sql = "INSERT INTO datos_principales(apellido_paterno,apellido_materno,nombres,fecha_nacimiento,nro_contacto,estado_civil,grupo_sanguineo,iddepartamento,idprovincia,iddistrito,domicilio,grado,especialidad,cip,codofin,dni,fecha_incorporacion_unidad,oficio,unidad_procedencia,tiempo_servicio_general,fecha_ingreso_pnp,fecha_egreso_escuela,fecha_ultimo_ascenso,departamento_labor,area_labor,cargo_labor,clase_arma,marca_arma,serie_arma,caf_nro) 
				VALUES ('$apellido_paterno','$apellido_materno','$nombres','$fecha_nacimiento','$nro_contacto','$estado_civil','$grupo_sanguineo','$departamento','$provincia','$distrito','$domicilio','$grado','$especialidad','$cip','$codofin','$dni','$fecha_incorporacion_unidad','$oficio','$unidad_procedencia','$tiempo_servicio_general','$fecha_ingreso_pnp','$fecha_egreso_escuela','$fecha_ultimo_ascenso','$departamento_labor','$area_labor','$cargo_labor','$clase_arma','$marca_arma','$serie_arma','$caf_nro') ";

			return ejecutarConsulta($sql);
		}

		public function editar($iddatos_principales,$fecha_nacimiento,$nro_contacto,$estado_civil,$grupo_sanguineo,$departamento,$provincia,$distrito,$domicilio,$grado,$especialidad,$cip,$codofin,$dni,$fecha_incorporacion_unidad,$oficio,$unidad_procedencia,$tiempo_servicio_general,$fecha_ingreso_pnp,$fecha_egreso_escuela,$fecha_ultimo_ascenso,$departamento_labor,$area_labor,$cargo_labor,$clase_arma,$marca_arma,$serie_arma,$caf_nro)
		{
			$sql ="UPDATE datos_principales SET fecha_nacimiento='$fecha_nacimiento', nro_contacto='$nro_contacto',estado_civil='$estado_civil',grupo_sanguineo='$grupo_sanguineo', iddepartamento='$departamento',idprovincia='$provincia',iddistrito='$distrito',domicilio='$domicilio',grado='$grado',especialidad='$especialidad',cip='$cip',codofin='$codofin',dni='$dni' ,fecha_incorporacion_unidad='$fecha_incorporacion_unidad',oficio='$oficio',unidad_procedencia='$unidad_procedencia',tiempo_servicio_general='$tiempo_servicio_general',fecha_ingreso_pnp='$fecha_ingreso_pnp',fecha_egreso_escuela='$fecha_egreso_escuela' , fecha_ultimo_ascenso='$fecha_ultimo_ascenso',departamento_labor='$departamento_labor',area_labor='$area_labor',cargo_labor='$cargo_labor',clase_arma='$clase_arma',marca_arma='$marca_arma',serie_arma='$serie_arma',caf_nro='$caf_nro' WHERE iddatos_principales = '$iddatos_principales' ";
			  return ejecutarConsulta($sql); 

		}


		public function mostrar($iddatos_principales)
		{
			$sql="SELECT iddatos_principales, 
			
			  CONCAT(apellido_paterno ,' ' ,apellido_materno ,' ', nombres)  as nombre_completo,
			 -- fecha_nacimiento, 
			  CONCAT(day(fecha_nacimiento) , ' de ',
				       CASE
				        when month(fecha_nacimiento)=1 then 'Enero'
						when month(fecha_nacimiento)=2 then 'Febrero'
				        when month(fecha_nacimiento)=3 then 'Marzo'
				        when month(fecha_nacimiento)=4 then 'Abril'
				        when month(fecha_nacimiento)=5 then 'Mayo'
				        when month(fecha_nacimiento)=6 then 'Junio'
				        when month(fecha_nacimiento)=7 then 'Julio'
				        when month(fecha_nacimiento)=8 then 'Agosto'
				        when month(fecha_nacimiento)=9 then 'Septiembre'
				        when month(fecha_nacimiento)=10 then 'Octubre'
				        when month(fecha_nacimiento)=11 then 'Noviembre'
				        when month(fecha_nacimiento)=12 then 'Diciembre'
				       END,
							 ' del ' ,year(fecha_nacimiento)) as fecha_nacimiento,
			  nro_contacto, 
			  estado_civil,
			   grupo_sanguineo, 
			   departamentos.nombre as departamento,
			    provincias.nombre as provincia, 
			    distritos.nombre as distrito,
			     domicilio, 
			     grado, 
			     especialidad,
			      cip,
			       codofin, 
			       dni, 
			       --fecha_incorporacion_unidad, 

					 CONCAT(day(fecha_incorporacion_unidad) , ' de ',
				       CASE
				        when month(fecha_incorporacion_unidad)=1 then 'Enero'
						when month(fecha_incorporacion_unidad)=2 then 'Febrero'
				        when month(fecha_incorporacion_unidad)=3 then 'Marzo'
				        when month(fecha_incorporacion_unidad)=4 then 'Abril'
				        when month(fecha_incorporacion_unidad)=5 then 'Mayo'
				        when month(fecha_incorporacion_unidad)=6 then 'Junio'
				        when month(fecha_incorporacion_unidad)=7 then 'Julio'
				        when month(fecha_incorporacion_unidad)=8 then 'Agosto'
				        when month(fecha_incorporacion_unidad)=9 then 'Septiembre'
				        when month(fecha_incorporacion_unidad)=10 then 'Octubre'
				        when month(fecha_incorporacion_unidad)=11 then 'Noviembre'
				        when month(fecha_incorporacion_unidad)=12 then 'Diciembre'
				       END,
							 ' del ' ,year(fecha_incorporacion_unidad)) as fecha_incorporacion_unidad,

			       oficio, 
			       unidad_procedencia,
			        tiempo_servicio_general, 
			        --fecha_ingreso_pnp,
			         CONCAT(day(fecha_ingreso_pnp) , ' de ',
				       CASE
				        when month(fecha_ingreso_pnp)=1 then 'Enero'
						when month(fecha_ingreso_pnp)=2 then 'Febrero'
				        when month(fecha_ingreso_pnp)=3 then 'Marzo'
				        when month(fecha_ingreso_pnp)=4 then 'Abril'
				        when month(fecha_ingreso_pnp)=5 then 'Mayo'
				        when month(fecha_ingreso_pnp)=6 then 'Junio'
				        when month(fecha_ingreso_pnp)=7 then 'Julio'
				        when month(fecha_ingreso_pnp)=8 then 'Agosto'
				        when month(fecha_ingreso_pnp)=9 then 'Septiembre'
				        when month(fecha_ingreso_pnp)=10 then 'Octubre'
				        when month(fecha_ingreso_pnp)=11 then 'Noviembre'
				        when month(fecha_ingreso_pnp)=12 then 'Diciembre'
				       END,
							 ' del ' ,year(fecha_ingreso_pnp)) as fecha_ingreso_pnp,
			         --fecha_egreso_escuela, 
							 CONCAT(day(fecha_egreso_escuela) , ' de ',
				       CASE
				        when month(fecha_egreso_escuela)=1 then 'Enero'
						when month(fecha_egreso_escuela)=2 then 'Febrero'
				        when month(fecha_egreso_escuela)=3 then 'Marzo'
				        when month(fecha_egreso_escuela)=4 then 'Abril'
				        when month(fecha_egreso_escuela)=5 then 'Mayo'
				        when month(fecha_egreso_escuela)=6 then 'Junio'
				        when month(fecha_egreso_escuela)=7 then 'Julio'
				        when month(fecha_egreso_escuela)=8 then 'Agosto'
				        when month(fecha_egreso_escuela)=9 then 'Septiembre'
				        when month(fecha_egreso_escuela)=10 then 'Octubre'
				        when month(fecha_egreso_escuela)=11 then 'Noviembre'
				        when month(fecha_egreso_escuela)=12 then 'Diciembre'
				       END,
							 ' del ' ,year(fecha_egreso_escuela)) as fecha_egreso_escuela,

			         --fecha_ultimo_ascenso,
						   CONCAT(day(fecha_ultimo_ascenso) , ' de ',
				       CASE
				        when month(fecha_ultimo_ascenso)=1 then 'Enero'
						when month(fecha_ultimo_ascenso)=2 then 'Febrero'
				        when month(fecha_ultimo_ascenso)=3 then 'Marzo'
				        when month(fecha_ultimo_ascenso)=4 then 'Abril'
				        when month(fecha_ultimo_ascenso)=5 then 'Mayo'
				        when month(fecha_ultimo_ascenso)=6 then 'Junio'
				        when month(fecha_ultimo_ascenso)=7 then 'Julio'
				        when month(fecha_ultimo_ascenso)=8 then 'Agosto'
				        when month(fecha_ultimo_ascenso)=9 then 'Septiembre'
				        when month(fecha_ultimo_ascenso)=10 then 'Octubre'
				        when month(fecha_ultimo_ascenso)=11 then 'Noviembre'
				        when month(fecha_ultimo_ascenso)=12 then 'Diciembre'
				       END,
							 ' del ' ,year(fecha_ultimo_ascenso)) as fecha_ultimo_ascenso,

			          departamento_labor,
			           area_labor, 
			           cargo_labor, 
			           clase_arma, 
			           marca_arma, 
			           serie_arma,
			            caf_nro 
			            from datos_principales 
			            inner join departamentos on departamentos.iddepartamentos = datos_principales.iddepartamento 
			            inner join provincias on provincias.idprovincias = datos_principales.idprovincia 
			            inner join distritos on distritos.iddistritos = datos_principales.iddistrito 

			            WHERE iddatos_principales ='$iddatos_principales'
			            " ;
			/*$sql = "SELECT *

			 FROM datos_principales
			  WHERE iddatos_principales='$iddatos_principales' ";*/
			return ejecutarConsultaSimplefila($sql);
		}

		public function listar()
		{
			$sql="SELECT * FROM datos_principales order by iddatos_principales desc";
			return ejecutarConsulta($sql);
		}

		
	}

?>