<?php
session_start();
require_once "../models/Usuario.php";
 
$usuario=new Usuario();
 
$idusuario=isset($_POST["idusuario"])? limpiarCadena($_POST["idusuario"]):"";

$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$login=isset($_POST["login"])? limpiarCadena($_POST["login"]):"";
$clave=isset($_POST["clave"])? limpiarCadena($_POST["clave"]):"";
$fecha_sesion = isset($_POST["fecha_sesion"])? limpiarCadena($_POST["fecha_sesion"]):"";
$hora_sesion = isset($_POST["hora_sesion"])? limpiarCadena($_POST["hora_sesion"]):"";
$logina=isset($_POST["logina"])? limpiarCadena($_POST["logina"]):"";


$newclave = isset($_POST['newclave'])? limpiarCadena($_POST['newclave']): "";

 
switch ($_GET["op"]){
    case 'guardaryeditar':

 
        if (empty($idusuario)){
            $rspta=$usuario->insertar($nombre,$login,$clave,$_POST['permiso']);
            echo $rspta ? "Usuario registrado" : "No se pudieron registrar todos los datos del usuario";
        }
        else {
            $rspta=$usuario->editar($idusuario,$nombre,$login,$clave,$_POST['permiso']);
            echo $rspta ? "Usuario actualizado" : "Usuario no se pudo actualizar";
        }
    break;
 
    case 'desactivar':
        $rspta=$usuario->desactivar($idusuario);
        echo $rspta ? "Usuario Desactivado" : "Usuario no se puede desactivar";
    break;
 
    case 'activar':
        $rspta=$usuario->activar($idusuario);
        echo $rspta ? "Usuario activado" : "Usuario no se puede activar";
    break;


    case 'editarclave':
        $rspta=$usuario->editarclave($login,$newclave);
        echo $rspta ? "<i class='fa fa-check ' style='color:#169F85;'></i> Su clave ha sido actualizada, por favor cierre y vuelva a iniciar sesión." : "Su contraseña no ha podido ser actualizada.";
    break;
 
    case 'mostrar':
        $rspta=$usuario->mostrar($idusuario);
        //Codificar el resultado utilizando json
        echo json_encode($rspta);
    break;
 
    case 'listar':
        $rspta=$usuario->listar();
        //Vamos a declarar un array
        $data= Array();
 
        while ($reg=$rspta->fetch_object()){
            $data[]=array(
                "0"=>
                '<button class="btn btn-dark" style="cursor:pointer;" onclick="mostrar('.$reg->idusuario.')"><i class="zmdi zmdi-eye"></i></button>'
                 ,
                 "1"=>$reg->grado,
                "2"=>$reg->nombre,
                "3"=>$reg->login,                
                "4"=>($reg->condicion)?  
              ' <button class="btn btn-dark" style=" border:none; cursor:pointer;"  onclick="desactivar('.$reg->idusuario.')"><i class="" style="color:background: rgba(0,0,0,0.3);"> &nbsp;Activo &nbsp;</i></button>':
                    
                    ' <button class ="btn btn-dark" style=" border:none; cursor:pointer;"  onclick="activar('.$reg->idusuario.')"><i class="" style="color:background: rgba(0,0,0,0.3);">Inactivo</i></button>'
                
              
                /*"5"=>($reg->condicion)?'<span class="text-success">Usuario Activo</span>':
                '<span class="text-danger">Usuario Inactivo</span>'*/
                );
        }
        $results = array(
            "sEcho"=>1, //Información para el datatables
            "iTotalRecords"=>count($data), //enviamos el total registros al datatable
            "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
            "aaData"=>$data);
        echo json_encode($results);
 
    break;

    case 'permisos':
        //Obtenemos todos los permisos de la tabla permisos
        require_once "../models/Permiso.php";
        $permiso = new Permiso();
        $rspta = $permiso->listar();

        //Obtener los permisos asignados al usuario
        $id=$_GET['id'];
        $marcados = $usuario->listarmarcados($id);
        //Declaramos el array para almacenar todos los permisos marcados
        $valores=array();

        //Almacenar los permisos asignados al usuario en el array
        while ($per = $marcados->fetch_object())
            {
                array_push($valores, $per->idpermiso);
            }

        //Mostramos la lista de permisos en la vista y si están o no marcados
        while ($reg = $rspta->fetch_object())
                {
                    $sw=in_array($reg->idpermiso,$valores)?'checked':'';
                    echo '
                    <li>
                    <div class="form-group" >
                        <div class="toggle-switch toggle-switch--red" style="width:200px;" >
                         <input  type="checkbox" '.$sw.' class="toggle-switch__checkbox"  name="permiso[]" value="'.$reg->idpermiso.'">     
                         <i class="toggle-switch__helper" style="width:30px;"></i><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>'.$reg->nombre.'
                        </div>
                        </div>
                    </li>';
                }
    break;
 
    case 'verificar':
        $logina=$_POST['logina'];
        $clavea=$_POST['clavea'];
 
        //Hash SHA256 en la contraseña
        
        $rspta=$usuario->verificar($logina, $clavea);
 
        $fetch=$rspta->fetch_object();
 
        if (isset($fetch))
        {
            //Declaramos las variables de sesión
            $_SESSION['idusuario']=$fetch->idusuario;
         
            $_SESSION['login']=$fetch->login;
             $_SESSION['nombre']=$fetch->nombre;
               $_SESSION['clave']=$fetch->clave;
               $_SESSION['grado']=$fetch->grado;

             
            

                        //Obtenemos los permisos del usuario
            $marcados = $usuario->listarmarcados($fetch->idusuario);

            //Declaramos el array para almacenar todos los permisos marcados
            $valores=array();

            //Almacenamos los permisos marcados en el array
            while ($per = $marcados->fetch_object())
                {
                    array_push($valores, $per->idpermiso);
                }

            //Determinamos los accesos del usuario
            
            in_array(1,$valores)?$_SESSION['personal_comisaria']=1:$_SESSION['personal_comisaria']=0;
            in_array(2,$valores)?$_SESSION['registro_denuncias']=1:$_SESSION['registro_denuncias']=0;
            in_array(3,$valores)?$_SESSION['usuarios']=1:$_SESSION['usuarios']=0;
            

 
        }
        echo json_encode($fetch);
    break;


        case "nombreusuario":

                $rspta = $usuario->nombreusuario();

                while ($reg = $rspta->fetch_object())
                        {
                            echo '<option value=' . $reg->iddatos_principales . '>' . $reg->nombre . '</option>';
                        }
        break;


        case "auditar_inicio" :
        $rspta = $usuario->auditar_inicio($logina,$fecha_sesion,$hora_sesion);
        break;
 
    case 'salir':
        //Limpiamos las variables de sesión   
        session_unset();
        //Destruìmos la sesión
        session_destroy();
        //Redireccionamos al login
        header("Location: ../index.php");
 
    break;
}
?>