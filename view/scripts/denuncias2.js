var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})
	

}

//Función limpiar
function limpiar()
{

}

//Función mostrar formulario
function mostrarform(flag)
{
	limpiar();
	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}
}



//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrarform(false);
}

//Función Listar
function listar()
{
	tabla=$('#datatable').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor*/
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	   
		"ajax":
				{
					url: '../controllers/denuncias.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		/*"bDestroy": true,*/
		"iDisplayLength": 10//Paginación
	  
	}).DataTable();
}
//Función para guardar o editar

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../controllers/denuncias.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	          tabla.ajax.reload();
	    }

	});
	limpiar();
}

function mostrar(iddenuncia)
{
	$.post("../controllers/denuncias.php?op=mostrar",{iddenuncia : iddenuncia}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);
		

		$("#iddenuncia").val(data.iddenuncias);
		$("#usuario_registro").val(data.usuario_registro);
		$("#fecha_registro").val(data.fecha_registro);
		$("#hora_registro").val(data.hora_registro);
		$("#contenido").val(data.contenido);
		$("#personal_acargo").val(data.personal_acargo);
		$("#tipo_denuncia").val(data.tipo_denuncia);
		
		$("#ubicacion").val(data.ubicacion);
		$("#ubicacion_detalle").val(data.ubicacion_detalle);
		$("#denunciante").val(data.denunciante);
		$("#denunciado").val(data.denunciado);

 	});
 	
}




init();