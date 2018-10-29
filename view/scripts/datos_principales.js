var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	

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
		$("#formularioregistros").show();
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





init();
