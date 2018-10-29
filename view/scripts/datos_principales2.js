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
		$(".dataTables_buttons").hide();
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
					url: '../controllers/datos_principales.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		/*"bDestroy": true,*/
		"iDisplayLength": 10,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)*/
	}).DataTable();
}
//Función para guardar o editar

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("enabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../controllers/datos_principales.php?op=guardaryeditar",
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


function mostrar(iddatos_principales)
{
	$.post("../controllers/datos_principales.php?op=mostrar",{iddatos_principales : iddatos_principales}, function(data, status)
	{
		data = JSON.parse(data);
		mostrarform(true);

		$("#nombre_completo").html(data.nombre_completo)

		$("#iddatos_principales").val(data.iddatos_principales);
		$("#apellido_paterno").val(data.apellido_paterno);
		$("#apellido_materno").val(data.apellido_materno);
		$("#nombres").val(data.nombres);
		$("#fecha_nacimiento").val(data.fecha_nacimiento);
		$("#nro_contacto").val(data.nro_contacto);
		$("#estado_civil").val(data.estado_civil);
		$("#grupo_sanguineo").val(data.grupo_sanguineo);
		$("#cbodepartamentos").val(data.departamento);
		$("#cboprovincias").val(data.provincia);
		$("#cbodistritos").val(data.distrito);
		//$("#cbodepartamento").selectpicker('refresh');
		$("#domicilio").val(data.domicilio);
		
		$("#grado").val(data.grado);
		$("#especialidad").val(data.especialidad);
		$("#cip").val(data.cip);
		$("#codofin").val(data.codofin);
		$("#dni").val(data.dni);
		$("#fecha_incorporacion_unidad").val(data.fecha_incorporacion_unidad);
		$("#oficio").val(data.oficio);
		$("#unidad_procedencia").val(data.unidad_procedencia);
		$("#tiempo_servicio_general").val(data.tiempo_servicio_general);
		$("#fecha_ingreso_pnp").val(data.fecha_ingreso_pnp);
		$("#fecha_egreso_escuela").val(data.fecha_egreso_escuela);
		$("#oficio").val(data.oficio);
		$("#fecha_ultimo_ascenso").val(data.fecha_ultimo_ascenso);
		$("#departamento_labor").val(data.departamento_labor);
		$("#area_labor").val(data.area_labor);
		$("#cargo_labor").val(data.cargo_labor);
		$("#fecha_ingreso_pnp").val(data.fecha_ingreso_pnp);
		$("#clase_arma").val(data.clase_arma);
		$("#marca_arma").val(data.marca_arma);
		$("#serie_arma").val(data.serie_arma);
		$("#caf_nro").val(data.caf_nro);



		
 	});

}



init();
