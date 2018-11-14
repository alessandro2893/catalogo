/*=============================================
EDITAR PERSONAL PREPRODUCCION
=============================================*/

$(".btnEditarPersonalPreproduccion").click(function(){

	var idPersonalPreproduccion = $(this).attr("idPersonalPreproduccion");

	var datos = new FormData();
	datos.append("idPersonalPreproduccion", idPersonalPreproduccion);

	$.ajax({
		url: "ajax/personalpreproduccion.ajax.php",
		method: "POST",
      	data: datos,
      	cache: false,
     	contentType: false,
     	processData: false,
     	dataType:"json",
     	success: function(respuesta){

        $("#editarGuionista").val(respuesta["personal_guionista"]);
        $("#idPersonalPreproduccion").val(respuesta["id"]);
        $("#editarCostodiaGui").val(respuesta["tarf_costo_dia_guionista"]);
        $("#editarCostoHoraGui").val(respuesta["costo_hora_guionista"]);
        $("#editarHorametaGui").val(respuesta["horas_meta_guionista"]);
        $("#editarTotalGui").val(respuesta["total_costo_guionista"]);
        $("#editarCoord").val(respuesta["personal_coord"]);
        $("#editarCostodiaCoor").val(respuesta["tarf_costo_dia_coord"]);
        $("#editarCostoHoraCoor").val(respuesta["costo_hora_coord"]);
        $("#editarHorametaCoor").val(respuesta["horas_meta_coord"]);
        $("#editarTotalCoor").val(respuesta["total_costo_coord"]);
     		$("#editarTotalCostoPer").val(respuesta["total_costo_personal"]);

     	}

	})


})


/*=============================================
EDITAR PERSONAL PREPRODUCCION
=============================================*/

$(".btnEliminarPersonalPreproduccion").click(function(){

	 var idPersonalPreproduccion = $(this).attr("idPersonalPreproduccion");

	 swal({
	 	title: '¿Está seguro de borrar los datos del Personal Preproducción?',
	 	text: "¡Si no lo está puede cancelar la acción!",
	 	type: 'warning',
	 	showCancelButton: true,
	 	confirmButtonColor: '#3085d6',
	 	cancelButtonColor: '#d33',
	 	cancelButtonText: 'Cancelar',
	 	confirmButtonText: 'Si, borrar datos!'
	 }).then((result)=>{

	 	if(result.value){

	 		window.location = "index.php?ruta=personal-preproduccion&idPersonalPreproduccion="+idPersonalPreproduccion;

	 	}

	 })

})
