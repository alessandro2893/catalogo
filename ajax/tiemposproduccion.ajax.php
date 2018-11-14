<?php

require_once "../controladores/tiemposproduccion.controlador.php";
require_once "../modelos/tiemposproduccion.modelo.php";

class AjaxTiempoProduccion{

	/*=============================================
	EDITAR CATEGORÍA
	=============================================*/

	public $idTiempoProduccion;

	public function ajaxEditarTiempoProduccion(){

		$item = "id";
		$valor = $this->idTiempoProduccion;

		$respuesta = ControladorTiempoProduccion::ctrMostrarTiempoProduccion($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR CATEGORÍA
=============================================*/
if(isset($_POST["idTiempoProduccion"])){

	$TiempoProduccion = new AjaxTiempoProduccion();
	$TiempoProduccion -> idTiempoProduccion = $_POST["idTiempoProduccion"];
	$TiempoProduccion -> ajaxEditarTiempoProduccion();
}
