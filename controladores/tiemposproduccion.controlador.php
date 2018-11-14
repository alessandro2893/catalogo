<?php

class ControladorTiempoProduccion{

	/*=============================================
	CREAR TIEMPOSPRODUCCION
	=============================================*/

	static public function ctrCrearTiempoProduccion(){

		if(isset($_POST["nuevaDiasRodaje"])){

			if(preg_match('/^[0-9]+$/', $_POST["nuevaDiasRodaje"]) &&
				 preg_match('/^[0-9]+$/', $_POST["nuevaHoraRodaje"]) &&
				 preg_match('/^[0-9]+$/', $_POST["nuevaTotalRodaje"])
				){

				$tabla = "tiempos_produccion";

				$datos = array("dia_rodaje"=>$_POST["nuevaDiasRodaje"],
                         "hora_rodaje"=>$_POST["nuevaHoraRodaje"],
                         "total_horas_rodaje"=>$_POST["nuevaTotalRodaje"]
                         );

				$respuesta = ModeloTiempoProduccion::mdlIngresarTiempoProduccion($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "Los Tiempos Producción ha sido guardada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
									if (result.value) {

									window.location = "tiempos-produccion";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡Los Tiempos no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
							if (result.value) {

							window.location = "tiempos-produccion";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	MOSTRAR TIEMPOSPRODUCCION
	=============================================*/

	static public function ctrMostrarTiempoProduccion($item, $valor){

		$tabla = "tiempos_produccion";

		$respuesta = ModeloTiempoProduccion::mdlMostrarTiempoProduccion($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR TIEMPOSPRODUCCION
	=============================================*/

	static public function ctrEditarTiempoProduccion(){

		if(isset($_POST["editarDiasRodaje"])){

			if(preg_match('/^[0-9]+$/', $_POST["editarDiasRodaje"]) &&
			 	 preg_match('/^[0-9]+$/', $_POST["editarHoraRodaje"]) &&
				 preg_match('/^[0-9]+$/', $_POST["editarTotalRodaje"])
				){

				$tabla = "tiempos_produccion";

				$datos = array("id"=>$_POST["idTiempoProduccion"],
							   			 "dia_rodaje"=>$_POST["editarDiasRodaje"],
										 	 "hora_rodaje"=>$_POST["editarHoraRodaje"],
										 	 "total_horas_rodaje"=>$_POST["editarTotalRodaje"]);

				$respuesta = ModeloTiempoProduccion::mdlEditaTiempoProduccion($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El tiempo ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
									if (result.value) {

									window.location = "tiempos-produccion";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡Los tiempos no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
							if (result.value) {

							window.location = "tiempos-produccion";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR CATEGORIA
	=============================================*/

	static public function ctrBorrarTiempoProduccion(){

		if(isset($_GET["idTiempoProduccion"])){

			$tabla ="tiempos_produccion";

			$datos = $_GET["idTiempoProduccion"];

			$respuesta = ModeloTiempoProduccion::mdlBorrarTiempoProduccion($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "Los Tiempos de Producción ha sido borrada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
									if (result.value) {

									window.location = "tiempos-produccion";

									}
								})

					</script>';
			}
		}

	}
}
