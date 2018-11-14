<?php

require_once  "conexion.php";

class ModeloPersonalPreproduccion{

  /*=============================================
  MOSTRAR PREPRODUCCION
  =============================================*/

  	static public function mdlMostrarPersonalPreproduccion($tabla, $item, $valor){

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
  	CREAR PERSONAL PRE PRODUCCION
  	=============================================*/

    static public function mdlIngresarPersonalPreproduccion($tabla, $datos){

  		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(personal_guionista, tarf_costo_dia_guionista, costo_hora_guionista,
                                                                horas_meta_guionista, total_costo_guionista, personal_coord,
                                                                tarf_costo_dia_coord, costo_hora_coord, horas_meta_coord, total_costo_coord, total_costo_personal)
      VALUES (:personal_guionista, :tarf_costo_dia_guionista, :costo_hora_guionista, :horas_meta_guionista, :total_costo_guionista,
              :personal_coord, :tarf_costo_dia_coord, :costo_hora_coord, :horas_meta_coord, :total_costo_coord, :total_costo_personal)");

      $stmt->bindParam(":personal_guionista", $datos["personal_guionista"], PDO::PARAM_STR);

      // $stmt->bindParam(":personal_guionista", $datos["personal_guionista"], PDO::PARAM_INT);
      $stmt->bindParam(":tarf_costo_dia_guionista", $datos["tarf_costo_dia_guionista"], PDO::PARAM_INT);
      $stmt->bindParam(":costo_hora_guionista", $datos["costo_hora_guionista"], PDO::PARAM_INT);
      $stmt->bindParam(":horas_meta_guionista", $datos["horas_meta_guionista"], PDO::PARAM_INT);
      $stmt->bindParam(":total_costo_guionista", $datos["total_costo_guionista"], PDO::PARAM_INT);

      $stmt->bindParam(":personal_coord", $datos["personal_coord"], PDO::PARAM_STR);

      $stmt->bindParam(":tarf_costo_dia_coord", $datos["tarf_costo_dia_coord"], PDO::PARAM_INT);
      $stmt->bindParam(":costo_hora_coord", $datos["costo_hora_coord"], PDO::PARAM_INT);
      $stmt->bindParam(":horas_meta_coord", $datos["horas_meta_coord"], PDO::PARAM_INT);
      $stmt->bindParam(":total_costo_coord", $datos["total_costo_coord"], PDO::PARAM_INT);
      $stmt->bindParam(":total_costo_personal", $datos["total_costo_personal"], PDO::PARAM_INT);


  		if($stmt->execute()){

  			return "ok";

  		}else{

  			return "error";

  		}

  		$stmt->close();
  		$stmt = null;

  	}



    /*=============================================
  	EDITAR PERSONAL PRE PRODUCCION
  	=============================================*/

    static public function mdlEditarPersonalPreproduccion($tabla, $datos){

  		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET personal_guionista = :personal_guionista, tarf_costo_dia_guionista = :tarf_costo_dia_guionista,
                                                               costo_hora_guionista = :costo_hora_guionista, horas_meta_guionista = :horas_meta_guionista,
                                                               total_costo_guionista = :total_costo_guionista, personal_coord = :personal_coord,
                                                               tarf_costo_dia_coord = :tarf_costo_dia_coord, costo_hora_coord = :costo_hora_coord,
                                                               horas_meta_coord = :horas_meta_coord, total_costo_coord = :total_costo_coord,
                                                               total_costo_personal = :total_costo_personal WHERE id = :id");

      $stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
      $stmt->bindParam(":personal_guionista", $datos["personal_guionista"], PDO::PARAM_STR);
      $stmt->bindParam(":tarf_costo_dia_guionista", $datos["tarf_costo_dia_guionista"], PDO::PARAM_INT);
      $stmt->bindParam(":costo_hora_guionista", $datos["costo_hora_guionista"], PDO::PARAM_INT);
      $stmt->bindParam(":horas_meta_guionista", $datos["horas_meta_guionista"], PDO::PARAM_INT);
      $stmt->bindParam(":total_costo_guionista", $datos["total_costo_guionista"], PDO::PARAM_INT);
      $stmt->bindParam(":personal_coord", $datos["personal_coord"], PDO::PARAM_STR);
      $stmt->bindParam(":tarf_costo_dia_coord", $datos["tarf_costo_dia_coord"], PDO::PARAM_INT);
      $stmt->bindParam(":costo_hora_coord", $datos["costo_hora_coord"], PDO::PARAM_INT);
      $stmt->bindParam(":horas_meta_coord", $datos["horas_meta_coord"], PDO::PARAM_INT);
      $stmt->bindParam(":total_costo_coord", $datos["total_costo_coord"], PDO::PARAM_INT);
      $stmt->bindParam(":total_costo_personal", $datos["total_costo_personal"], PDO::PARAM_INT);


  		if($stmt->execute()){

  			return "ok";

  		}else{

  			return "error";

  		}

  		$stmt->close();
  		$stmt = null;

  	}


    /*=============================================
  	BORRAR PERSONAL PREPRODUCCION
  	=============================================*/

  	static public function mdlBorrarPersonalPreproduccion($tabla, $datos){

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
