<?php 
//Incluímos inicialmente la conexión a la base de datos

require "../conexion/Conexion.php";

Class Usuario
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($iddatos_principales,$login,$clave,$permisos)
	{
		$sql="INSERT INTO usuario(iddatos_principales,login,clave,condicion)
		VALUES('$iddatos_principales','$login','$clave', '1')";
		//return ejecutarConsulta($sql);
		$idusuarionew=ejecutarConsulta_retornarID($sql);

		$num_elementos=0;
		$sw=true;

		while ($num_elementos < count($permisos))
		{
			$sql_detalle = "INSERT INTO usuario_permiso(idusuario, idpermiso) VALUES('$idusuarionew', '$permisos[$num_elementos]')";
			ejecutarConsulta($sql_detalle) or $sw = false;
			$num_elementos=$num_elementos + 1;
		}

		return $sw;
	}

	//Implementamos un método para editar registros
	public function editar($idusuario,$iddatos_principales,$login,$clave,$permisos)
	{
		$sql="UPDATE usuario SET iddatos_principales='$iddatos_principales',login='$login',clave='$clave' WHERE idusuario='$idusuario'";
		ejecutarConsulta($sql);

		//Eliminamos todos los permisos asignados para volverlos a registrar
		$sqldel="DELETE FROM usuario_permiso WHERE idusuario='$idusuario'";
		ejecutarConsulta($sqldel);

		$num_elementos=0;
		$sw=true;

		while ($num_elementos < count($permisos))
		{
			$sql_detalle = "INSERT INTO usuario_permiso(idusuario, idpermiso) VALUES('$idusuario', '$permisos[$num_elementos]')";
			ejecutarConsulta($sql_detalle) or $sw = false;
			$num_elementos=$num_elementos + 1;
		}

		return $sw;

	}

	

	//Implementamos un método para desactivar categorías
	public function desactivar($idusuario)
	{
		$sql="UPDATE usuario SET condicion='0' WHERE idusuario='$idusuario'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar categorías
	public function activar($idusuario)
	{
		$sql="UPDATE usuario SET condicion='1' WHERE idusuario='$idusuario'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idusuario)
	{
		$sql="SELECT * FROM usuario  WHERE idusuario='$idusuario'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT usuario.idusuario as idusuario,
		 usuario.login as login,
		  usuario.clave as clave,
		   (CONCAT( datos_principales.apellido_paterno, ' ', datos_principales.apellido_materno , ', ' , datos_principales.nombres )) as nombre, datos_principales.grado as grado ,
		    usuario.condicion as condicion
		     FROM usuario
		      left outer join datos_principales on usuario.iddatos_principales = datos_principales.iddatos_principales order by idusuario DESC";
		//$sql="SELECT * FROM usuario";
		return ejecutarConsulta($sql);		
	}
	//Implementar un método para listar los permisos marcados
	public function listarmarcados($idusuario)
	{
		$sql="SELECT * FROM usuario_permiso WHERE idusuario='$idusuario'";
		return ejecutarConsulta($sql);
	}

	//Función para verificar el acceso al sistema
	public function verificar($login,$clave)
    {
    	$sql="SELECT usuario.idusuario as idusuario,
		 usuario.login as login,
		  usuario.clave as clave,
		   (CONCAT( datos_principales.apellido_paterno, ' ', datos_principales.apellido_materno , ', ' , datos_principales.nombres )) as nombre, datos_principales.grado as grado ,
		    usuario.condicion as condicion
		     FROM usuario
		      left outer join datos_principales on usuario.iddatos_principales = datos_principales.iddatos_principales
    	 WHERE login='$login' AND clave='$clave' AND condicion='1' "; 
    	return ejecutarConsulta($sql);  
    }

     public function nombreusuario(){

    	$sql="SELECT iddatos_principales,
			CONCAT(apellido_paterno , ' ' , apellido_materno , ', ' , nombres) as nombre
    	FROM datos_principales";
    	return ejecutarConsulta($sql);
    }


    public function editarclave($login,$newclave){
		$sql="UPDATE usuario set clave='$newclave' where login='$login'";
		return ejecutarConsulta($sql);
	}

	public function auditar_inicio($logina,$fecha_sesion,$hora_sesion)
	{
		$sql = "INSERT INTO auditoria(logina,fecha_sesion,hora_sesion) VALUES('$logina','$fecha_sesion','$hora_sesion')";
		return ejecutarConsulta($sql);
	}
    

   
}

?>