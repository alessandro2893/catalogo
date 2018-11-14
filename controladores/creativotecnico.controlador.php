<?php

class ControladorCreativoTecnico{

	/*=============================================
	CREAR TIEMPOSPRODUCCION
	=============================================*/

	static public function ctrCrearCreativoTecnico(){

		if(isset($_POST["nuevoDiaestimado"])){

			if(preg_match('/^[0-9]+$/', $_POST["nuevoDiaestimado"]) &&
				 preg_match('/^[0-9]+$/', $_POST["nuevoHorametage"]) &&
				 preg_match('/^[0-9]+$/', $_POST["nuevoCostoes"]) &&
				 preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoProductor"]) &&
				 preg_match('/^[0-9]+$/', $_POST["nuevoTarfPro"]) &&
				 preg_match('/^[0-9]+$/', $_POST["nuevoHoraPro"]) &&
				 preg_match('/^[0-9]+$/', $_POST["nuevoSubTPro"]) &&
				 preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoDirector"])
				){


				$tabla = "creativo_tecnico";

				$datos = array("dias_estimados"=>$_POST["nuevoDiaestimado"],
					             "id_tiempo_produccion"=>$_POST["nuevoHorametage"],
											 "costo_dia_cre_tec"=>$_POST["nuevoCostoes"],
											 "productor"=>$_POST["nuevoProductor"],
											 "tarif_costo_produc"=>$_POST["nuevoTarfPro"],
											 "costo_hora_produc"=>$_POST["nuevoHoraPro"],
											 "subt_costo_produc"=>$_POST["nuevoSubTPro"],
											 "director"=>$_POST["nuevoDirector"]
                         );

				$respuesta = ModeloCreativoTecnico::mdlIngresarCreativoTecnico($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El Personal Crativo ha sido guardada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
									if (result.value) {

									window.location = "creativo-tecnico";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El Personal Crativo no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
							if (result.value) {

							window.location = "creativo-tecnico";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	MOSTRAR CREATIVO-TECNICO
	=============================================*/

	static public function ctrMostrarCreativoTecnico($item, $valor){

		$tabla = "creativo_tecnico";

		$respuesta = ModeloCreativoTecnico::mdlMostrarCreativoTecnico($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR TIEMPOSPRODUCCION
	=============================================*/

	// static public function ctrEditarTiempoProduccion(){
	//
	// 	if(isset($_POST["editarDiasRodaje"])){
	//
	// 		if(preg_match('/^[0-9]+$/', $_POST["editarDiasRodaje"]) &&
	// 		 	 preg_match('/^[0-9]+$/', $_POST["editarHoraRodaje"]) &&
	// 			 preg_match('/^[0-9]+$/', $_POST["editarTotalRodaje"])
	// 			){
	//
	// 			$tabla = "tiempos_produccion";
	//
	// 			$datos = array("id"=>$_POST["idTiempoProduccion"],
	// 						   			 "dia_rodaje"=>$_POST["editarDiasRodaje"],
	// 									 	 "hora_rodaje"=>$_POST["editarHoraRodaje"],
	// 									 	 "total_horas_rodaje"=>$_POST["editarTotalRodaje"]);
	//
	// 			$respuesta = ModeloTiempoProduccion::mdlEditaTiempoProduccion($tabla, $datos);
	//
	// 			if($respuesta == "ok"){
	//
	// 				echo'<script>
	//
	// 				swal({
	// 					  type: "success",
	// 					  title: "El tiempo ha sido cambiado correctamente",
	// 					  showConfirmButton: true,
	// 					  confirmButtonText: "Cerrar",
	// 					  closeOnConfirm: false
	// 					  }).then((result) => {
	// 								if (result.value) {
	//
	// 								window.location = "tiempos-produccion";
	//
	// 								}
	// 							})
	//
	// 				</script>';
	//
	// 			}
	//
	//
	// 		}else{
	//
	// 			echo'<script>
	//
	// 				swal({
	// 					  type: "error",
	// 					  title: "¡Los tiempos no puede ir vacía o llevar caracteres especiales!",
	// 					  showConfirmButton: true,
	// 					  confirmButtonText: "Cerrar",
	// 					  closeOnConfirm: false
	// 					  }).then((result) => {
	// 						if (result.value) {
	//
	// 						window.location = "tiempos-produccion";
	//
	// 						}
	// 					})
	//
	// 		  	</script>';
	//
	// 		}
	//
	// 	}
	//
	// }

	/*=============================================
	BORRAR CATEGORIA
	=============================================*/

	// static public function ctrBorrarTiempoProduccion(){
	//
	// 	if(isset($_GET["idTiempoProduccion"])){
	//
	// 		$tabla ="tiempos_produccion";
	//
	// 		$datos = $_GET["idTiempoProduccion"];
	//
	// 		$respuesta = ModeloTiempoProduccion::mdlBorrarTiempoProduccion($tabla, $datos);
	//
	// 		if($respuesta == "ok"){
	//
	// 			echo'<script>
	//
	// 				swal({
	// 					  type: "success",
	// 					  title: "Los Tiempos de Producción ha sido borrada correctamente",
	// 					  showConfirmButton: true,
	// 					  confirmButtonText: "Cerrar",
	// 					  closeOnConfirm: false
	// 					  }).then((result) => {
	// 								if (result.value) {
	//
	// 								window.location = "tiempos-produccion";
	//
	// 								}
	// 							})
	//
	// 				</script>';
	// 		}
	// 	}
	//
	// }
}
