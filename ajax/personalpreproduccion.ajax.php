<?php

require_once "../controladores/personalpreproduccion.controlador.php";
require_once "../modelos/personalpreproduccion.modelo.php";

class AjaxPersonalPreproduccion{

	/*=============================================
	EDITAR PERSONAL PREPRODUCCION
	=============================================*/

	public $idPersonalPreproduccion;

	public function ajaxEditarPersonalPreproduccion(){

		$item = "id";
		$valor = $this->idPersonalPreproduccion;

		$respuesta = ControladorPersonalPreproduccion::ctrMostrarPersonalPreproduccion($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR CATEGORÍA
=============================================*/
if(isset($_POST["idPersonalPreproduccion"])){

	$personalpreproduccion = new AjaxPersonalPreproduccion();
	$personalpreproduccion -> idPersonalPreproduccion = $_POST["idPersonalPreproduccion"];
	$personalpreproduccion -> ajaxEditarPersonalPreproduccion();
}
