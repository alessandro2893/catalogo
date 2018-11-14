<?php

require_once "conexion.php";

class ModeloTiempoProduccion{

	/*=============================================
	CREAR CATEGORIA
	=============================================*/

	static public function mdlIngresarTiempoProduccion($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(dia_rodaje, hora_rodaje, total_horas_rodaje)
																					 VALUES (:dia_rodaje, :hora_rodaje, :total_horas_rodaje)");


	  $stmt->bindParam(":dia_rodaje", $datos["dia_rodaje"], PDO::PARAM_STR);
		$stmt->bindParam(":hora_rodaje", $datos["hora_rodaje"], PDO::PARAM_STR);
		$stmt->bindParam(":total_horas_rodaje", $datos["total_horas_rodaje"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR CATEGORIAS
	=============================================*/

	static public function mdlMostrarTiempoProduccion($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	EDITAR CATEGORIA
	=============================================*/

	static public function mdlEditaTiempoProduccion($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET dia_rodaje = :dia_rodaje, hora_rodaje = :hora_rodaje, total_horas_rodaje = :total_horas_rodaje
			 																		WHERE id = :id");

		$stmt -> bindParam(":dia_rodaje", $datos["dia_rodaje"], PDO::PARAM_STR);
		$stmt -> bindParam(":hora_rodaje", $datos["hora_rodaje"], PDO::PARAM_STR);
		$stmt -> bindParam(":total_horas_rodaje", $datos["total_horas_rodaje"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $datos["id"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	BORRAR CATEGORIA
	=============================================*/

	static public function mdlBorrarTiempoProduccion($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt -> close();

		$stmt = null;

	}

}
