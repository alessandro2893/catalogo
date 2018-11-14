<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Personal Pre Producción

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Personal Pre Producción</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarPersonalPreproduccion">

          Agregar Personal

        </button>

      </div>

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablas tablaPersonalProduccion">

        <thead>

         <tr>

           <th style="width:10px">#</th>
           <th>Productor Guionista</th>
           <th>Tarifa / Costo Día</th>
           <th>Costo Hora (8H)</th>
           <th>Horas Meta</th>
           <th>Total Costo Guionista</th>
           <th>Coord. RDS Media</th>
           <th>Tarifa / Costo Día</th>
           <th>Costo Hora (8H)</th>
           <th>Horas Meta</th>
           <th>Total Costo Coord.</th>
           <th>Total Costo Personal</th>
           <th>Acciones</th>

         </tr>

        </thead>

        <tbody>

          <?php

          $item = null;
          $valor = null;

          $personalprepro = ControladorPersonalPreproduccion::ctrMostrarPersonalPreproduccion($item, $valor);

          // var_dump($personalprepro);
          foreach ($personalprepro as $key => $value) {

            echo '    <tr>
                        <td>'.($key+1).'</td>
                        <td>'.$value["personal_guionista"].'</td>
                        <td>Lps '.number_format($value["tarf_costo_dia_guionista"],2).'</td>
                        <td>Lps '.number_format($value["costo_hora_guionista"],2).'</td>
                        <td>'.$value["horas_meta_guionista"].'</td>
                        <td>Lps '.number_format($value["total_costo_guionista"],2).'</td>
                        <td>'.$value["personal_coord"].'</td>
                        <td>Lps '.number_format($value["tarf_costo_dia_coord"],2).'</td>
                        <td>Lps '.number_format($value["costo_hora_coord"],2).'</td>
                        <td>'.$value["horas_meta_coord"].'</td>
                        <td>Lps '.number_format($value["total_costo_coord"],2).'</td>
                        <td>Lps '.number_format($value["total_costo_personal"],2).'</td>
                        <td>

                          <div class="btn-group">

                            <button class="btn btn-warning btnEditarPersonalPreproduccion" idPersonalPreproduccion="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarPersonalPreproduccion"><i class="fa fa-pencil"></i></button>

                            <button class="btn btn-danger btnEliminarPersonalPreproduccion" idPersonalPreproduccion="'.$value["id"].'" data-toggle="modal" data-target="#modalEliminarPersonalPreproduccion"><i class="fa fa-times"></i></button>

                          </div>

                        </td>

                      </tr>';
          }

          ?>


        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR PERSONAL
======================================-->

<div id="modalAgregarPersonalPreproduccion" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Personal Pre Producción</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL GUIONISTA -->

            <div class="form-group row">

              <div class="col-xs-8">

                <div class="input-group ">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="text" class="form-control input-lg" name="nuevoGuionista" placeholder="Ingresar descripción"  >

                </div>

              </div>

            </div>


            <!-- ENTRADA PARA GUIONISTA -->

            <div class="form-group row">

              <div class="col-xs-4" style="padding:0">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="text" class="form-control input-lg nuevoCostodiaGui" id="nuevoCostodiaGui" name="nuevoCostodiaGui" min="0" placeholder="Costo Día"  >

                </div>

              </div>


              <div class="col-xs-4" style="padding:0">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="text" class="form-control input-lg nuevoCostoHoraGui" id="nuevoCostoHoraGui" name="nuevoCostoHoraGui" min="0" placeholder="Costo Hora"  >

                </div>

              </div>


              <div class="col-xs-4" style="padding:0">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <select class="form-control input-lg nuevoHorametaGui" id="nuevoHorametaGui" name="nuevoHorametaGui">

                    <option value="">Hora produccion</option>

                      <?php

                      $item = null;
                      $value = null;

                      $preproduccion = ControladorPreproduccion::ctrMostrarPreproduccion($item, $valor);


                      foreach ($preproduccion as $key => $value) {

                        echo '<option value="'.$value["horas_produccion"].'">'.$value["horas_produccion"].'</option>';
                      }

                      ?>




                  </select>


                </div>

              </div>


            </div>


            <!-- ENTRADA PARA TOTAL GUIONISTA -->

            <div class="form-group row">

              <div class="col-xs-8" style="padding:0">



             </div>

              <div class="input-group col-xs-4">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg nuevoTotalGui" id="nuevoTotalGui" name="nuevoTotalGui" min="0" placeholder="Total Costo"  >

              </div>

            </div>


            <!-- ENTRADA PARA EL COORDINADOR -->

            <div class="form-group">

              <div class="input-group col-xs-8">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoCoord" placeholder="Ingresar descripción">

              </div>

            </div>


            <!-- ENTRADA PARA DATOS COORDINADOR -->

             <div class="form-group row">

               <div class="col-xs-4" style="padding:0">

                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-key"></i></span>

                   <input type="text" class="form-control input-lg nuevoCostodiaCoor" id="nuevoCostodiaCoor" name="nuevoCostodiaCoor" min="0" placeholder="Costo Día"  >

                </div>

              </div>

              <div class="col-xs-4" style="padding:0">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="text" class="form-control input-lg nuevoCostoHoraCoor" id="nuevoCostoHoraCoor" name="nuevoCostoHoraCoor" min="0" placeholder="Costo Hora"  >

               </div>

             </div>

             <div class="col-xs-4" style="padding:0">

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-user"></i></span>

                 <select class="form-control input-lg nuevoHorametaCoor" id="nuevoHorametaCoor" name="nuevoHorametaCoor">

                   <option value="">Hora produccion</option>

                     <?php


                     foreach ($preproduccion as $key => $value) {

                       echo '<option value="'.$value["total_horas_validacion"].'">'.$value["total_horas_validacion"].'</option>';
                     }

                     ?>




                 </select>


               </div>

             </div>

            </div>



            <!-- ENTRADA PARA TOTAL COORDINADOR -->

            <div class="form-group row">

              <div class="col-xs-8" style="padding:0">



             </div>

              <div class="input-group col-xs-4">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg nuevoTotalCoor" id="nuevoTotalCoor" name="nuevoTotalCoor" min="0" placeholder="Total Costo"  >

              </div>

            </div>


            <hr>

            <!-- ENTRADA PARA SUMA TOTAL -->

             <div class="form-group row">

               <div class="col-xs-8" style="padding:0">



              </div>

               <div class="col-xs-4" style="padding:0">


                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-video-camera"></i></span>

                   <input type="text" class="form-control input-lg nuevoTotalCostoPer" id="nuevoTotalCostoPer" name="nuevoTotalCostoPer" placeholder="Total " min="0"   >

                </div>

              </div>


            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar usuario</button>

        </div>


        <?php
        $crearPersonalPreproduccion = new ControladorPersonalPreproduccion();
        $crearPersonalPreproduccion -> ctrCrearPersonalPreproduccion();
        ?>


      </form>

    </div>

  </div>

</div>


<!--=====================================
MODAL EDITAR PERSONAL PRE PRODUCCION
======================================-->

<div id="modalEditarPersonalPreproduccion" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar pre producción</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL GUIONISTA -->

            <div class="form-group row">

              <div class="input-group col-xs-8">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg editarGuionista" id="editarGuionista" name="editarGuionista" min="0" placeholder="Productor Guionista"  >
                <input type="hidden" id="idPersonalPreproduccion" name="idPersonalPreproduccion" min="0" placeholder="Productor Guionista"  >

              </div>

            </div>


            <!-- ENTRADA PARA GUIONISTA -->

            <div class="form-group row">

              <div class="col-xs-4" style="padding:0">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="text" class="form-control input-lg editarCostodiaGui" id="editarCostodiaGui" name="editarCostodiaGui" min="0" placeholder="Costo Día"  >

                </div>

              </div>


              <div class="col-xs-4" style="padding:0">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="text" class="form-control input-lg editarCostoHoraGui" id="editarCostoHoraGui" name="editarCostoHoraGui" min="0" placeholder="Costo Hora"  >

                </div>

              </div>


              <div class="col-xs-4" style="padding:0">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <select class="form-control input-lg editarHorametaGui" id="editarHorametaGui" name="editarHorametaGui">

                    <option value="">Hora produccion</option>

                      <?php




                      foreach ($preproduccion as $key => $value) {

                        echo '<option value="'.$value["horas_produccion"].'">'.$value["horas_produccion"].'</option>';
                      }

                      ?>

                    <!-- <option value="">14</option>
                    <option value="">28</option> -->


                  </select>

                  <!-- <input type="number" class="form-control input-lg nuevoHorametaGui" id="nuevoHorametaGui"  name="nuevoHorametaGui" placeholder="Horas Meta" min="0"   > -->

                </div>

              </div>


            </div>


            <!-- ENTRADA PARA TOTAL GUIONISTA -->

            <div class="form-group row">

              <div class="col-xs-8" style="padding:0">



             </div>

              <div class="input-group col-xs-4">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg editarTotalGui" id="editarTotalGui" name="editarTotalGui" min="0" placeholder="Total Costo"  >

              </div>

            </div>


            <!-- ENTRADA PARA EL COORDINADOR -->

            <div class="form-group row">

              <div class="input-group col-xs-8">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg editarCoord" id="editarCoord" name="editarCoord" min="0" placeholder="Coord. RDS Media"  >

              </div>

            </div>


            <!-- ENTRADA PARA DATOS COORDINADOR -->

             <div class="form-group row">

               <div class="col-xs-4" style="padding:0">

                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-key"></i></span>

                   <input type="text" class="form-control input-lg editarCostodiaCoor" id="editarCostodiaCoor" name="editarCostodiaCoor" min="0" placeholder="Costo Día"  >

                </div>

              </div>

              <div class="col-xs-4" style="padding:0">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="text" class="form-control input-lg editarCostoHoraCoor" id="editarCostoHoraCoor" name="editarCostoHoraCoor" min="0" placeholder="Costo Hora"  >

               </div>

             </div>

             <div class="col-xs-4" style="padding:0">

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-user"></i></span>

                 <select class="form-control input-lg editarHorametaCoor" id="editarHorametaCoor" name="editarHorametaCoor">

                   <option value="">Hora produccion</option>

                     <?php




                     foreach ($preproduccion as $key => $value) {

                       echo '<option value="'.$value["total_horas_validacion"].'">'.$value["total_horas_validacion"].'</option>';
                     }

                     ?>

                   <!-- <option value="">14</option>
                   <option value="">28</option> -->


                 </select>

                 <!-- <input type="number" class="form-control input-lg nuevoHorametaGui" id="nuevoHorametaGui"  name="nuevoHorametaGui" placeholder="Horas Meta" min="0"   > -->

               </div>

             </div>

            </div>



            <!-- ENTRADA PARA TOTAL COORDINADOR -->

            <div class="form-group row">

              <div class="col-xs-8" style="padding:0">



             </div>

              <div class="input-group col-xs-4">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg editarTotalCoor" id="editarTotalCoor" name="editarTotalCoor" min="0" placeholder="Total Costo"  >

              </div>

            </div>


            <hr>

            <!-- ENTRADA PARA SUMA TOTAL -->

             <div class="form-group row">

               <div class="col-xs-8" style="padding:0">



              </div>

               <div class="col-xs-4" style="padding:0">


                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-video-camera"></i></span>

                   <input type="text" class="form-control input-lg editarTotalCostoPer" id="editarTotalCostoPer" name="editarTotalCostoPer" placeholder="Total " min="0"   >

                </div>

              </div>


            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

        <?php

        $editarPersonalPreproduccion = new ControladorPersonalPreproduccion();
        $editarPersonalPreproduccion -> ctrEditarPersonalPreproduccion();

        ?>


      </form>

    </div>

  </div>

</div>


<?php

  $borrarPersonalPreproduccion = new ControladorPersonalPreproduccion();
  $borrarPersonalPreproduccion -> ctrBorrarPersonalPreproduccion();

?>
