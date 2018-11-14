<?php

require_once "../controladores/preproduccion.controlador.php";
require_once "../modelos/preproduccion.modelo.php";

class AjaxPreproduccion{

	/*=============================================
	EDITAR CATEGORÍA
	=============================================*/

	public $idPreproduccion;

	public function ajaxEditarPreproduccion(){

		$item = "id";
		$valor = $this->idPreproduccion;

		$respuesta = ControladorPreproduccion::ctrMostrarPreproduccion($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR CATEGORÍA
=============================================*/
if(isset($_POST["idPreproduccion"])){

	$Preproduccion = new AjaxPreproduccion();
	$Preproduccion -> idPreproduccion = $_POST["idPreproduccion"];
	$Preproduccion -> ajaxEditarPreproduccion();
}
