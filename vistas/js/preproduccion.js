/*=============================================
EDITAR PREPRODUCCION
=============================================*/

$(".btnEditarProproduccion").click(function(){

	var idPreproduccion = $(this).attr("idPreproduccion");

	var datos = new FormData();
	datos.append("idPreproduccion", idPreproduccion);

	$.ajax({
		url: "ajax/preproduccion.ajax.php",
		method: "POST",
      	data: datos,
      	cache: false,
     	contentType: false,
     	processData: false,
     	dataType:"json",
     	success: function(respuesta){

				// console.log("respuesta", respuesta);

				$("#idPreproduccion").val(respuesta["id"]);
				$("#editarDiaguionPro").val(respuesta["dias_guion"]);
				$("#editarHoraguionPro").val(respuesta["horas_guion"]);
				$("#editarTotalguionPro").val(respuesta["total_horas_guion"]);
				$("#editarHorasrevisionPro").val(respuesta["horas_revision"]);
				$("#editarHorasajustePro").val(respuesta["horas_ajuste"]);
				$("#editarTotalvalidacionPro").val(respuesta["total_horas_validacion"]);
				$("#editarDiacoorpro").val(respuesta["dias_coord"]);
				$("#editarHoracoorPro").val(respuesta["horas_coord"]);
				$("#editarTotalhoracoorpro").val(respuesta["total_horas_pro"]);
				$("#editarHoraspreproduccion").val(respuesta["horas_produccion"]);

     	}

	})


})


/*=============================================
ELIMINAR CATEGORIA
=============================================*/

$(".btnEliminarProproduccion").click(function(){

	 var idPreproduccion = $(this).attr("idPreproduccion");

	 swal({
	 	title: '¿Está seguro de borrar los datos de Preproducción?',
	 	text: "¡Si no lo está puede cancelar la acción!",
	 	type: 'warning',
	 	showCancelButton: true,
	 	confirmButtonColor: '#3085d6',
	 	cancelButtonColor: '#d33',
	 	cancelButtonText: 'Cancelar',
	 	confirmButtonText: 'Si, borrar datos de Preproducción!'
	 }).then((result)=>{

	 	if(result.value){

	 		window.location = "index.php?ruta=preproduccion&idPreproduccion="+idPreproduccion;

	 	}

	 })

})




/*=============================================
CALCULOS MATEMATICOS
=============================================*/


/*=============================================
CALCULO TOTALGUION
=============================================*/


$("#nuevoDiaguionPro").keyup(function(){

		var valorDiaguionPro = $(".nuevoDiaguionPro").val();

		$("#nuevoTotalguionPro").val(valorDiaguionPro);

});



$("#nuevoHoraguionPro").keyup(function(){

		var valorHoraguionPro = $(".nuevoHoraguionPro").val();

		$("#nuevoTotalguionPro").val(valorHoraguionPro);

});
