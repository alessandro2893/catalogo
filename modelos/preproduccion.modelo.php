<?php

require_once  "conexion.php";

class ModeloPreproduccion{

  /*=============================================
  MOSTRAR PREPRODUCCION
  =============================================*/

  	static public function mdlMostrarPreproduccion($tabla, $item, $valor){

      if ($item !=null) {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC");

        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt -> fetch();


      }else {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt -> execute();

        return $stmt -> fetchAll();


      }

      $stmt -> close();

      $stmt = null;


    }


    /*=============================================
  	REGISTRO DE PREPRODUCCION
  	=============================================*/
  	static public function mdlIngresarPreproduccion($tabla, $datos){


  		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(dias_guion, horas_guion,
  			 total_horas_guion, horas_revision, horas_ajuste, total_horas_validacion, dias_coord,
         horas_coord, total_horas_pro, horas_produccion)
  			 VALUES (:dias_guion, :horas_guion, :total_horas_guion, :horas_revision, :horas_ajuste,
                 :total_horas_validacion, :dias_coord, :horas_coord, :total_horas_pro, :horas_produccion)");

  		$stmt->bindParam(":dias_guion", $datos["dias_guion"], PDO::PARAM_INT);
  		$stmt->bindParam(":horas_guion", $datos["horas_guion"], PDO::PARAM_STR);
  		$stmt->bindParam(":total_horas_guion", $datos["total_horas_guion"], PDO::PARAM_STR);
  		$stmt->bindParam(":horas_revision", $datos["horas_revision"], PDO::PARAM_STR);
  		$stmt->bindParam(":horas_ajuste", $datos["horas_ajuste"], PDO::PARAM_STR);
  		$stmt->bindParam(":total_horas_validacion", $datos["total_horas_validacion"], PDO::PARAM_STR);
      $stmt->bindParam(":dias_coord", $datos["dias_coord"], PDO::PARAM_STR);
      $stmt->bindParam(":horas_coord", $datos["horas_coord"], PDO::PARAM_STR);
      $stmt->bindParam(":total_horas_pro", $datos["total_horas_pro"], PDO::PARAM_STR);
  		$stmt->bindParam(":horas_produccion", $datos["horas_produccion"], PDO::PARAM_STR);

  		if($stmt->execute()){

  			return "ok";

  		}else{

  			return "error";

  		}

  		$stmt->close();
  		$stmt = null;

  	}



    /*=============================================
  	EDITAR PREPRODUCCION
  	=============================================*/
  	static public function mdlEditarPreproduccion($tabla, $datos){

  		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET dias_guion = :dias_guion,
         horas_guion = :horas_guion, total_horas_guion = :total_horas_guion, horas_revision = :horas_revision,
         horas_ajuste = :horas_ajuste, total_horas_validacion = :total_horas_validacion,
          dias_coord = :dias_coord, horas_coord = :horas_coord,  total_horas_pro = :total_horas_pro,
          horas_produccion = :horas_produccion  WHERE id = :id");

      $stmt -> bindParam(":id", $datos["id"], PDO::PARAM_INT);
  		$stmt->bindParam(":dias_guion", $datos["dias_guion"], PDO::PARAM_INT);
  		$stmt->bindParam(":horas_guion", $datos["horas_guion"], PDO::PARAM_STR);
  		$stmt->bindParam(":total_horas_guion", $datos["total_horas_guion"], PDO::PARAM_STR);
  		$stmt->bindParam(":horas_revision", $datos["horas_revision"], PDO::PARAM_STR);
  		$stmt->bindParam(":horas_ajuste", $datos["horas_ajuste"], PDO::PARAM_STR);
  		$stmt->bindParam(":total_horas_validacion", $datos["total_horas_validacion"], PDO::PARAM_STR);
      $stmt->bindParam(":dias_coord", $datos["dias_coord"], PDO::PARAM_STR);
      $stmt->bindParam(":horas_coord", $datos["horas_coord"], PDO::PARAM_STR);
      $stmt->bindParam(":total_horas_pro", $datos["total_horas_pro"], PDO::PARAM_STR);
      $stmt->bindParam(":horas_produccion", $datos["horas_produccion"], PDO::PARAM_STR);

  		if($stmt->execute()){

  			return "ok";

  		}else{

  			return "error";

  		}

  		$stmt->close();
  		$stmt = null;

  	}


    /*=============================================
  	BORRAR PREPRODUCCION
  	=============================================*/

  	static public function mdlBorrarPreproduccion($tabla, $datos){

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
