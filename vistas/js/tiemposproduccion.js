/*=============================================
EDITAR CATEGORIA
=============================================*/

$(".btnEditarTiempoProduccion").click(function(){

	var idTiempoProduccion = $(this).attr("idTiempoProduccion");

	var datos = new FormData();
	datos.append("idTiempoProduccion", idTiempoProduccion);

	$.ajax({
		url: "ajax/tiemposproduccion.ajax.php",
		method: "POST",
      	data: datos,
      	cache: false,
     	contentType: false,
     	processData: false,
     	dataType:"json",
     	success: function(respuesta){
				console.log(respuesta);
				// alert(datos);

				$("#editarDiasRodaje").val(respuesta["dia_rodaje"]);
				$("#editarHoraRodaje").val(respuesta["hora_rodaje"]);
     		$("#editarTotalRodaje").val(respuesta["total_horas_rodaje"]);
     		$("#idTiempoProduccion").val(respuesta["id"]);

     	}

	})


})

/*=============================================
ELIMINAR CATEGORIA
=============================================*/

$(".btnEliminarTiempoProduccion").click(function(){

	 var idTiempoProduccion = $(this).attr("idTiempoProduccion");

	 swal({
	 	title: '¿Está seguro de borrar los tiempos?',
	 	text: "¡Si no lo está puede cancelar la acción!",
	 	type: 'warning',
	 	showCancelButton: true,
	 	confirmButtonColor: '#3085d6',
	 	cancelButtonColor: '#d33',
	 	cancelButtonText: 'Cancelar',
	 	confirmButtonText: 'Si, borrar Tiempos!'
	 }).then((result)=>{

	 	if(result.value){

	 		window.location = "index.php?ruta=tiempos-produccion&idTiempoProduccion="+idTiempoProduccion;

	 	}

	 })

})
