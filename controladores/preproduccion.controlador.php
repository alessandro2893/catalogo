<?php

class ControladorPreproduccion{

  /*=============================================
  MOSTRAR PREPRODUCCION
  =============================================*/

  static public function ctrMostrarPreproduccion($item, $valor){

    $tabla = "preproduccion";

    $respuesta = ModeloPreproduccion::mdlMostrarPreproduccion($tabla, $item, $valor);

    return $respuesta;

  }


  /*=============================================
	CREAR PRODUCTO
	=============================================*/

	static public function ctrCrearPreproduccion(){

		if(isset($_POST["nuevoDiaguionPro"])){

			if(preg_match('/^[0-9]+$/', $_POST["nuevoDiaguionPro"]) &&
			   preg_match('/^[0-9]+$/', $_POST["nuevoHoraguionPro"]) &&
         preg_match('/^[0-9]+$/', $_POST["nuevoTotalguionPro"]) &&
         preg_match('/^[0-9]+$/', $_POST["nuevoHorasrevisionPro"]) &&
         preg_match('/^[0-9]+$/', $_POST["nuevoHorasajustePro"]) &&
         preg_match('/^[0-9]+$/', $_POST["nuevoTotalvalidacionPro"]) &&
         preg_match('/^[0-9]+$/', $_POST["nuevoDiacoorpro"]) &&
         preg_match('/^[0-9]+$/', $_POST["nuevoHoracoorPro"]) &&
         preg_match('/^[0-9]+$/', $_POST["nuevoTotalhoracoorpro"]) &&
			   preg_match('/^[0-9]+$/', $_POST["nuevoHoraspreproduccion"])
        ){




				$tabla = "preproduccion";

				$datos = array("dias_guion" => $_POST["nuevoDiaguionPro"],
							   "horas_guion" => $_POST["nuevoHoraguionPro"],
							   "total_horas_guion" => $_POST["nuevoTotalguionPro"],
							   "horas_revision" => $_POST["nuevoHorasrevisionPro"],
							   "horas_ajuste" => $_POST["nuevoHorasajustePro"],
                 "total_horas_validacion" => $_POST["nuevoTotalvalidacionPro"],
                 "dias_coord" => $_POST["nuevoDiacoorpro"],
                 "horas_coord" => $_POST["nuevoHoracoorPro"],
                 "total_horas_pro" => $_POST["nuevoTotalhoracoorpro"],
							   "horas_produccion" => $_POST["nuevoHoraspreproduccion"]);

				$respuesta = ModeloPreproduccion::mdlIngresarPreproduccion($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "Los datos han sido guardado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then((result) => {
										if (result.value) {

										window.location = "preproduccion";

										}
									})

						</script>';


          }

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡Los datos no puede ir con los campos vacíos o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then((result) => {
							if (result.value) {

							window.location = "preproduccion";

							}
						})

			  	</script>';
        }
			}


	}


  /*=============================================
	EDITAR PREPRODUCCION
	=============================================*/

	static public function ctreditarPreproduccion(){

		if(isset($_POST["editarDiaguionPro"])){

			if(preg_match('/^[0-9]+$/', $_POST["editarDiaguionPro"]) &&
			   preg_match('/^[0-9]+$/', $_POST["editarHoraguionPro"]) &&
         preg_match('/^[0-9]+$/', $_POST["editarTotalguionPro"]) &&
         preg_match('/^[0-9.]+$/', $_POST["editarHorasrevisionPro"]) &&
         preg_match('/^[0-9.]+$/', $_POST["editarHorasajustePro"]) &&
         preg_match('/^[0-9]+$/', $_POST["editarTotalvalidacionPro"]) &&
         preg_match('/^[0-9]+$/', $_POST["editarDiacoorpro"]) &&
         preg_match('/^[0-9]+$/', $_POST["editarHoracoorPro"]) &&
         preg_match('/^[0-9]+$/', $_POST["editarTotalhoracoorpro"]) &&
			   preg_match('/^[0-9]+$/', $_POST["editarHoraspreproduccion"])
        ){




				$tabla = "preproduccion";

				$datos = array("id"=>$_POST["idPreproduccion"],
                 "dias_guion" => $_POST["editarDiaguionPro"],
							   "horas_guion" => $_POST["editarHoraguionPro"],
							   "total_horas_guion" => $_POST["editarTotalguionPro"],
							   "horas_revision" => $_POST["editarHorasrevisionPro"],
							   "horas_ajuste" => $_POST["editarHorasajustePro"],
                 "total_horas_validacion" => $_POST["editarTotalvalidacionPro"],
                 "dias_coord" => $_POST["editarDiacoorpro"],
                 "horas_coord" => $_POST["editarHoracoorPro"],
                 "total_horas_pro" => $_POST["editarTotalhoracoorpro"],
							   "horas_produccion" => $_POST["editarHoraspreproduccion"]);

				$respuesta = ModeloPreproduccion::mdlEditarPreproduccion($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "Los datos han sido cambiado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then((result) => {
										if (result.value) {

										window.location = "preproduccion";

										}
									})

						</script>';


          }

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡Los datos no puede ir con los campos vacíos o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then((result) => {
							if (result.value) {

							window.location = "preproduccion";

							}
						})

			  	</script>';
        }
			}


	}


  /*=============================================
	ELIMINAR PREPRODUCCION
	=============================================*/
  static public function ctrBorrarPreproduccion(){

		if(isset($_GET["idPreproduccion"])){

			$tabla ="preproduccion";
			$datos = $_GET["idPreproduccion"];

			$respuesta = ModeloPreproduccion::mdlBorrarPreproduccion($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "Los datos de Preproducción ha sido borrados correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
									if (result.value) {

									window.location = "preproduccion";

									}
								})

					</script>';
			}
		}

	}



}
