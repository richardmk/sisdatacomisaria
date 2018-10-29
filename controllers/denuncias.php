<?php 
	
	require_once '../models/Denuncias.php';

	$denuncia = new Denuncias();


	$iddenuncia = isset($_POST['iddenuncia'])? limpiarCadena($_POST['iddenuncia']): "";
	$usuario_registro= isset($_POST['usuario_registro'])? limpiarCadena($_POST['usuario_registro']): "";
	$fecha_registro = isset($_POST['fecha_registro'])? limpiarCadena($_POST['fecha_registro']): "";
	$hora_registro = isset($_POST['hora_registro'])? limpiarCadena($_POST['hora_registro']): "";
	$contenido = isset($_POST['contenido'])? limpiarCadena($_POST['contenido']): "";
	$tipo_denuncia = isset($_POST['tipo_denuncia'])? limpiarCadena($_POST['tipo_denuncia']): "";
	$personal_acargo = isset($_POST['personal_acargo'])? limpiarCadena($_POST['personal_acargo']): "";
	$ubicacion =  isset($_POST['ubicacion'])? limpiarCadena($_POST['ubicacion']): "";
	$denunciante =  isset($_POST['denunciante'])? limpiarCadena($_POST['denunciante']): "";
	$denunciado =  isset($_POST['denunciado'])? limpiarCadena($_POST['denunciado']): "";
	$ubicacion_detalle =  isset($_POST['ubicacion_detalle'])? limpiarCadena($_POST['ubicacion_detalle']): "";


	switch ($_GET["op"]){

			case 'guardaryeditar':
			if (empty($iddenuncia)){
				$rspta=$denuncia->insertar($usuario_registro,$fecha_registro,$hora_registro,$contenido,$tipo_denuncia,$personal_acargo,$ubicacion,$denunciante,$denunciado,$ubicacion_detalle);

				echo $rspta ? "Datos registrados con éxito" : "Los datos no ha podido ser registrados"; 
			}else{
				$rspta=$denuncia->editar($iddenuncia,$contenido,$tipo_denuncia,$personal_acargo,$ubicacion,$denunciante,$denunciado,$ubicacion_detalle);

				echo $rspta ? "Datos actualizados con éxito" : "Los datos no ha podido ser actualizados"; 
			}
			break;	

			case 'mostrar' :

				$rspta=$denuncia->mostrar($iddenuncia);

				echo json_encode($rspta);
			break;

			case 'listar':
				$rspta=$denuncia->listar();
		 		//Vamos a declarar un array
		 		$data= Array();

		 		while ($reg=$rspta->fetch_object()){
		 			$data[]=array(
		 				"0"=>'<button class="btn btn-dark" style="cursor:pointer;"   onclick="mostrar('.$reg->iddenuncias.')"><i  class="zmdi zmdi-eye"></i></button>',
		 				"1"=>$reg->usuario_registro,
		 				"2"=>$reg->fecha_registro,
		 				"3"=>$reg->hora_registro,
		 				"4"=>'<p class="s-text">'.$reg->personal_acargo.'</p>',	
		 				"5"=>$reg->tipo_denuncia
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