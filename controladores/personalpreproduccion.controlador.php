<?php

class ControladorPersonalPreproduccion{

  /*=============================================
  MOSTRAR PERSONAL PREPRODUCCION
  =============================================*/

  static public function ctrMostrarPersonalPreproduccion($item, $valor){

    $tabla = "costo_personal_cre_tec";

    $respuesta = ModeloPersonalPreproduccion::mdlMostrarPersonalPreproduccion($tabla, $item, $valor);

    return $respuesta;

  }



  /*=============================================
  CREAR PERSONALPREPRODUCCION
  =============================================*/

  static public function ctrCrearPersonalPreproduccion(){

		if(isset($_POST["nuevoGuionista"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoGuionista"]) &&
         preg_match('/^[0-9]+$/', $_POST["nuevoCostodiaGui"]) &&
         preg_match('/^[0-9]+$/', $_POST["nuevoCostoHoraGui"]) &&
         preg_match('/^[0-9]+$/', $_POST["nuevoHorametaGui"]) &&
         preg_match('/^[0-9]+$/', $_POST["nuevoTotalGui"]) &&
         preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCoord"]) &&
         preg_match('/^[0-9]+$/', $_POST["nuevoCostodiaCoor"]) &&
         preg_match('/^[0-9]+$/', $_POST["nuevoCostoHoraCoor"]) &&
         preg_match('/^[0-9]+$/', $_POST["nuevoHorametaCoor"]) &&
         preg_match('/^[0-9]+$/', $_POST["nuevoTotalCoor"]) &&
         preg_match('/^[0-9]+$/', $_POST["nuevoTotalCostoPer"])){

				$tabla = "costo_personal_cre_tec";

				$datos = array("personal_guionista"=>$_POST["nuevoGuionista"],
                       "tarf_costo_dia_guionista"=>$_POST["nuevoCostodiaGui"],
                       "costo_hora_guionista"=>$_POST["nuevoCostoHoraGui"],
                        "horas_meta_guionista"=>$_POST["nuevoHorametaGui"],
                        "total_costo_guionista"=>$_POST["nuevoTotalGui"],
                         "personal_coord"=>$_POST["nuevoCoord"],
                         "tarf_costo_dia_coord"=>$_POST["nuevoCostodiaCoor"],
                         "costo_hora_coord"=>$_POST["nuevoCostoHoraCoor"],
                         "horas_meta_coord"=>$_POST["nuevoHorametaCoor"],
                         "total_costo_coord"=>$_POST["nuevoTotalCoor"],
                         "total_costo_personal"=>$_POST["nuevoTotalCostoPer"]
                         );

				$respuesta = ModeloPersonalPreproduccion::mdlIngresarPersonalPreproduccion($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El Personal pre producción ha sido guardada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
									if (result.value) {

									window.location = "personal-preproduccion";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El Personal pre producción no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
							if (result.value) {

							window.location = "personal-preproduccion";

							}
						})

			  	</script>';

			}

		}

	}



  /*=============================================
  EDITAR PERSONALPREPRODUCCION
  =============================================*/

  static public function ctrEditarPersonalPreproduccion(){

		if(isset($_POST["editarGuionista"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarGuionista"]) &&
         preg_match('/^[0-9]+$/', $_POST["editarCostodiaGui"]) &&
         preg_match('/^[0-9]+$/', $_POST["editarCostoHoraGui"]) &&
         preg_match('/^[0-9]+$/', $_POST["editarHorametaGui"]) &&
         preg_match('/^[0-9]+$/', $_POST["editarTotalGui"]) &&
         preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCoord"]) &&
         preg_match('/^[0-9]+$/', $_POST["editarCostodiaCoor"]) &&
         preg_match('/^[0-9]+$/', $_POST["editarCostoHoraCoor"]) &&
         preg_match('/^[0-9]+$/', $_POST["editarHorametaCoor"]) &&
         preg_match('/^[0-9]+$/', $_POST["editarTotalCoor"]) &&
         preg_match('/^[0-9]+$/', $_POST["editarTotalCostoPer"])){

				$tabla = "costo_personal_cre_tec";

				$datos = array("personal_guionista"=>$_POST["editarGuionista"],
                       "id"=>$_POST["idPersonalPreproduccion"],
                       "tarf_costo_dia_guionista"=>$_POST["editarCostodiaGui"],
                       "costo_hora_guionista"=>$_POST["editarCostoHoraGui"],
                        "horas_meta_guionista"=>$_POST["editarHorametaGui"],
                        "total_costo_guionista"=>$_POST["editarTotalGui"],
                         "personal_coord"=>$_POST["editarCoord"],
                         "tarf_costo_dia_coord"=>$_POST["editarCostodiaCoor"],
                         "costo_hora_coord"=>$_POST["editarCostoHoraCoor"],
                         "horas_meta_coord"=>$_POST["editarHorametaCoor"],
                         "total_costo_coord"=>$_POST["editarTotalCoor"],
                         "total_costo_personal"=>$_POST["editarTotalCostoPer"]
                         );

				$respuesta = ModeloPersonalPreproduccion::mdlEditarPersonalPreproduccion($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El Personal pre producción ha sido cambiada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
									if (result.value) {

									window.location = "personal-preproduccion";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El Personal pre producción no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
							if (result.value) {

							window.location = "personal-preproduccion";

							}
						})

			  	</script>';

			}

		}

	}



  /*=============================================
	BORRAR CATEGORIA
	=============================================*/

	static public function ctrBorrarPersonalPreproduccion(){

		if(isset($_GET["idPersonalPreproduccion"])){

			$tabla ="costo_personal_cre_tec";
			$datos = $_GET["idPersonalPreproduccion"];

			$respuesta = ModeloPersonalPreproduccion::mdlBorrarPersonalPreproduccion($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "Los datos han sido borrada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
									if (result.value) {

									window.location = "personal-preproduccion";

									}
								})

					</script>';
			}
		}

	}



}
