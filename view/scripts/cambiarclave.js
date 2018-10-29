var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	

	$("#formulario").on("submit",function(e)
	{
		editarclave(e);	
	})

}

//Función limpiar
function limpiar()
{

	//$("#login").val("");
	//$("#newclave").val("");
	
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
	
	mostrarform(false);
}

//Función Listar

//Función para guardar o editar

function editarclave(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../controllers/usuario.php?op=editarclave",
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

function mostrar(idusuario)
{
	$.post("../controllers/usuario.php?op=mostrar",{idusuario : idusuario}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);


		
		$("#login").val(data.login);
		$("#clave").val(data.clave);


 	});
 
}



init();