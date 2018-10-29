<?php
	require ('../../conexion/Conexion.php');
	
	$idprovincias = $_POST['idprovincias'];
	
	$queryD = "SELECT iddistritos,  nombre FROM distritos  WHERE idprovincias = '$idprovincias' ORDER BY nombre";
	$resultadoD = $conexion->query($queryD);
	
	$html= "<option value='0'>Seleccionar </option>";
	
	while($rowD = $resultadoD->fetch_assoc())
	{
		$html.= "<option value=".$rowD['iddistritos']." >".$rowD['nombre']."</option>";
	}
	
	echo $html;
?>