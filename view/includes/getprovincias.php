
<?php
	require ('../../conexion/Conexion.php');
	
	$iddepartamentos = $_POST['iddepartamentos'];
	
	$queryP = "SELECT idprovincias,  nombre FROM provincias  WHERE iddepartamentos = '$iddepartamentos' ORDER BY nombre";
	$resultadoP = $conexion->query($queryP);
	
	$html= "<option value='0'>Seleccionar </option>";
	
	while($rowP = $resultadoP->fetch_assoc())
	{
		$html.= "<option value=".$rowP['idprovincias']." >".$rowP['nombre']."</option>";
	}
	
	echo $html;
?>