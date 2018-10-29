<?php 

	require_once '../models/Datos_principales.php';

	$datos_principales =  new Datos_principales();

	$iddatos_principales = isset($_POST['iddatos_principales'])? limpiarCadena($_POST['iddatos_principales']): "";

	$apellido_paterno = isset($_POST['apellido_paterno'])? limpiarCadena($_POST['apellido_paterno']): "";
	$apellido_materno= isset($_POST['apellido_materno'])? limpiarCadena($_POST['apellido_materno']): "";
	$nombres = isset($_POST['nombres'])? limpiarCadena($_POST['nombres']): "";
	$fecha_nacimiento = isset($_POST['fecha_nacimiento'])? limpiarCadena($_POST['fecha_nacimiento']): "";
	$nro_contacto = isset($_POST['nro_contacto'])? limpiarCadena($_POST['nro_contacto']): "";
	$estado_civil = isset($_POST['estado_civil'])? limpiarCadena($_POST['estado_civil']): "";
	$grupo_sanguineo = isset($_POST['grupo_sanguineo'])? limpiarCadena($_POST['grupo_sanguineo']): "";
	$departamento = isset($_POST['cbodepartamentos'])? limpiarCadena($_POST['cbodepartamentos']): "";
	$provincia = isset($_POST['cboprovincias'])? limpiarCadena($_POST['cboprovincias']): "";
	$distrito = isset($_POST['cbodistritos'])? limpiarCadena($_POST['cbodistritos']): "";
	$domicilio = isset($_POST['domicilio'])? limpiarCadena($_POST['domicilio']): "";
	$grado = isset($_POST['grado'])? limpiarCadena($_POST['grado']): "";
	$especialidad = isset($_POST['especialidad'])? limpiarCadena($_POST['especialidad']): "";
	$cip = isset($_POST['cip'])? limpiarCadena($_POST['cip']): "";
	$codofin = isset($_POST['codofin'])? limpiarCadena($_POST['codofin']): "";
	$dni = isset($_POST['dni'])? limpiarCadena($_POST['dni']): "";
	$fecha_incorporacion_unidad = isset($_POST['fecha_incorporacion_unidad'])? limpiarCadena($_POST['fecha_incorporacion_unidad']): "";
	$oficio = isset($_POST['oficio'])? limpiarCadena($_POST['oficio']): "";
	$unidad_procedencia = isset($_POST['unidad_procedencia'])? limpiarCadena($_POST['unidad_procedencia']): "";
	$tiempo_servicio_general = isset($_POST['tiempo_servicio_general'])? limpiarCadena($_POST['tiempo_servicio_general']): "";
	$fecha_ingreso_pnp = isset($_POST['fecha_ingreso_pnp'])? limpiarCadena($_POST['fecha_ingreso_pnp']): "";
	$fecha_egreso_escuela = isset($_POST['fecha_egreso_escuela'])? limpiarCadena($_POST['fecha_egreso_escuela']): "";
	$fecha_ultimo_ascenso = isset($_POST['fecha_ultimo_ascenso'])? limpiarCadena($_POST['fecha_ultimo_ascenso']): "";
	$departamento_labor = isset($_POST['departamento_labor'])? limpiarCadena($_POST['departamento_labor']): "";
	$area_labor = isset($_POST['area_labor'])? limpiarCadena($_POST['area_labor']): "";
	$cargo_labor = isset($_POST['cargo_labor'])? limpiarCadena($_POST['cargo_labor']): "";
	$clase_arma = isset($_POST['clase_arma'])? limpiarCadena($_POST['clase_arma']): "";
	$marca_arma = isset($_POST['marca_arma'])? limpiarCadena($_POST['marca_arma']): "";
	$serie_arma = isset($_POST['serie_arma'])? limpiarCadena($_POST['serie_arma']): "";
	$caf_nro = isset($_POST['caf_nro'])? limpiarCadena($_POST['caf_nro']): "";
	



	switch ($_GET["op"]){

			case 'guardaryeditar':
			if (empty($iddatos_principales)){
				$rspta=$datos_principales->insertar($apellido_paterno,$apellido_materno,$nombres,$fecha_nacimiento,$nro_contacto,$estado_civil,$grupo_sanguineo,$departamento,$provincia,$distrito,$domicilio,$grado,$especialidad,$cip,$codofin,$dni,$fecha_incorporacion_unidad,$oficio,$unidad_procedencia,$tiempo_servicio_general,$fecha_ingreso_pnp,$fecha_egreso_escuela,$fecha_ultimo_ascenso,$departamento_labor,$area_labor,$cargo_labor,$clase_arma,$marca_arma,$serie_arma,$caf_nro);

				echo $rspta ? "Datos registrados con éxito" : "Los datos no ha podido ser registrados"; 
			}else{
				$rspta=$datos_principales->editar($iddatos_principales,$fecha_nacimiento,$nro_contacto,$estado_civil,$grupo_sanguineo,$departamento,$provincia,$distrito,$domicilio,$grado,$especialidad,$cip,$codofin,$dni,$fecha_incorporacion_unidad,$oficio,$unidad_procedencia,$tiempo_servicio_general,$fecha_ingreso_pnp,$fecha_egreso_escuela,$fecha_ultimo_ascenso,$departamento_labor,$area_labor,$cargo_labor,$clase_arma,$marca_arma,$serie_arma,$caf_nro);

				echo $rspta ? "Datos actualizados con éxito" : "Los datos no ha podido ser actualizados"; 
			}
			break;	

			case 'mostrar' :

				$rspta=$datos_principales->mostrar($iddatos_principales);

				echo json_encode($rspta);
			break;

			case 'listar':
				$rspta=$datos_principales->listar();
		 		//Vamos a declarar un array
		 		$data= Array();

		 		while ($reg=$rspta->fetch_object()){
		 			$data[]=array(
		 				"0"=>'<button class="btn btn-dark" style="cursor:pointer;"   onclick="mostrar('.$reg->iddatos_principales.')"><i  class="zmdi zmdi-eye"></i></button>',
		 				"1"=>$reg->grado,
		 				"2"=>$reg->apellido_paterno,
		 				"3"=>$reg->apellido_materno,
		 				"4"=>$reg->nombres,
		 				"5"=>$reg->dni,
		 				"6"=>$reg->especialidad
		 				);
		 		}
		 		$results = array(
		 			"sEcho"=>1, //Información para el datatables
		 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
		 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
		 			"aaData"=>$data);
		 		echo json_encode($results);

			break;

	}



 ?>