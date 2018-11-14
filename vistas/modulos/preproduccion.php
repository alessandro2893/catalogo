<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Pre Producción

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Pre Producción</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarPreproduccion">

          Agregar pre producción

        </button>

      </div>

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablas tablaPreproduccion">

        <thead>

         <tr>

           <th style="width:10px">#</th>
           <th>Días Guión</th>
           <th>Horas Guión</th>
           <th>Total Guión</th>
           <th>Horas Revisión</th>
           <th>Horas Ajuste</th>
           <th>Total H. Validacion</th>
           <th>Días coord.</th>
           <th>horas coord.</th>
           <th>Total Horas C.</th>
           <th>Horas Pre Producción.</th>
           <th>Acciones</th>

         </tr>

        </thead>

        <tbody>

          <?php

          $item = null;
          $valor = null;

          $preproduccion = ControladorPreproduccion::ctrMostrarPreproduccion($item, $valor);

// var_dump($preproduccion);
          foreach ($preproduccion as $key => $value) {

            echo '    <tr>
                        <td>'.($key+1).'</td>
                        <td>'.$value["dias_guion"].'</td>
                        <td>'.$value["horas_guion"].'</td>
                        <td>'.$value["total_horas_guion"].'</td>
                        <td>'.$value["horas_revision"].'</td>
                        <td>'.$value["horas_ajuste"].'</td>
                        <td>'.$value["total_horas_validacion"].'</td>
                        <td>'.$value["dias_coord"].'</td>
                        <td>'.$value["horas_coord"].'</td>
                        <td>'.$value["total_horas_pro"].'</td>
                        <td>'.$value["horas_produccion"].'</td>
                        <td>

                          <div class="btn-group">

                            <button class="btn btn-warning btnEditarProproduccion" idPreproduccion="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarPreproduccion"><i class="fa fa-pencil"></i></button>

                            <button class="btn btn-danger btnEliminarProproduccion" idPreproduccion="'.$value["id"].'" data-toggle="modal" data-target="#modalEliminarPreproduccion"><i class="fa fa-times"></i></button>

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
MODAL AGREGAR USUARIO
======================================-->

<div id="modalAgregarPreproduccion" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar pre producción</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL Guion -->

            <div class="form-group row">

              <div class="col-xs-4" style="padding:0">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="number" class="form-control input-lg nuevoDiaguionPro" id="nuevoDiaguionPro" name="nuevoDiaguionPro" min="0" placeholder="Días Guión" required>

                </div>

              </div>


              <div class="col-xs-4" style="padding:0">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="number" class="form-control input-lg nuevoHoraguionPro" id="nuevoHoraguionPro" name="nuevoHoraguionPro" min="0" placeholder="Horas Guión" required>

                </div>

              </div>


              <div class="col-xs-4" style="padding:0">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="number" class="form-control input-lg nuevoTotalguionPro" id="nuevoTotalguionPro"  name="nuevoTotalguionPro" placeholder="Total H. Guión" min="0"  required>

                </div>

              </div>


            </div>



            <!-- ENTRADA PARA EL validacion -->

             <div class="form-group row">

               <div class="col-xs-4" style="padding:0">

                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-key"></i></span>

                   <input type="text" class="form-control input-lg nuevoHorasrevisionPro" id="nuevoHorasrevisionPro" name="nuevoHorasrevisionPro" min="0" placeholder="Horas Revisión" required>

                </div>

              </div>

              <div class="col-xs-4" style="padding:0">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="text" class="form-control input-lg nuevoHorasajustePro" id="nuevoHorasajustePro" name="nuevoHorasajustePro" min="0" placeholder="Horas Ajuste" required>

               </div>

             </div>

             <div class="col-xs-4" style="padding:0">

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-key"></i></span>

                 <input type="number" class="form-control input-lg nuevoTotalvalidacionPro" id="nuevoTotalvalidacionPro" name="nuevoTotalvalidacionPro" placeholder="Total H. Validación" min="0"  required>

              </div>

            </div>

            </div>

            <!-- ENTRADA PARA LA COOR -->

             <div class="form-group row">

               <div class="col-xs-4" style="padding:0">

                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                   <input type="number" class="form-control input-lg nuevoDiacoorpro" id="nuevoDiacoorpro" name="nuevoDiacoorpro" min="0" placeholder="Días Coord." required>

                </div>

              </div>

              <div class="col-xs-4" style="padding:0">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                  <input type="number" class="form-control input-lg nuevoHoracoorPro" id="nuevoHoracoorPro" name="nuevoHoracoorPro" min="0" placeholder="Horas Coord." required>

               </div>

             </div>

             <div class="col-xs-4" style="padding:0">

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                 <input type="number" class="form-control input-lg nuevoTotalhoracoorpro" id="nuevoTotalhoracoorpro" name="nuevoTotalhoracoorpro" placeholder="Total Horas C." min="0"  required>

              </div>

            </div>


            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->



            <!-- ENTRADA PARA Total -->

             <div class="form-group row">

               <div class="col-xs-8" style="padding:0">



              </div>

               <div class="col-xs-4" style="padding:0">


                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-video-camera"></i></span>

                   <input type="number" class="form-control input-lg nuevoHoraspreproduccion" id="nuevoHoraspreproduccion" name="nuevoHoraspreproduccion" placeholder="Total Horas" min="0"  required>

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

          $crearPreproduccion = new ControladorPreproduccion();
          $crearPreproduccion -> ctrCrearPreproduccion();

         ?>



      </form>

    </div>

  </div>

</div>


<!--=====================================
MODAL EDITAR PREPRODUCCION
======================================-->

<div id="modalEditarPreproduccion" class="modal fade" role="dialog">

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

            <!-- ENTRADA PARA EL Guion -->

            <div class="form-group row">

              <div class="col-xs-4" style="padding:0">

                <label>Días Guión</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="hidden"  name="idPreproduccion" id="idPreproduccion" required>

                  <input type="number" class="form-control input-lg editarDiaguionPro" id="editarDiaguionPro" name="editarDiaguionPro" min="0" placeholder="Días Guión" required>

                </div>

              </div>


              <div class="col-xs-4" style="padding:0">

                <label>Horas Guión</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="number" class="form-control input-lg editarHoraguionPro" id="editarHoraguionPro" name="editarHoraguionPro" min="0" placeholder="Horas Guión" required>

                </div>

              </div>


              <div class="col-xs-4" style="padding:0">

                <label>Total Guión</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="number" class="form-control input-lg editarTotalguionPro" id="editarTotalguionPro"  name="editarTotalguionPro" placeholder="Total H. Guión" min="0"  required>

                </div>

              </div>


            </div>



            <!-- ENTRADA PARA EL validacion -->

             <div class="form-group row">

               <div class="col-xs-4" style="padding:0">

                 <label>Horas Revisión</label>

                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-key"></i></span>

                   <input type="text" class="form-control input-lg editarHorasrevisionPro" id="editarHorasrevisionPro" name="editarHorasrevisionPro" min="0" placeholder="Horas Revisión" required>

                </div>

              </div>

              <div class="col-xs-4" style="padding:0">

              <label>Horas Ajuste</label>


                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="text" class="form-control input-lg editarHorasajustePro" id="editarHorasajustePro" name="editarHorasajustePro" min="0" placeholder="Horas Ajuste" required>

               </div>

             </div>

             <div class="col-xs-4" style="padding:0">

             <label>Total H. Validación</label>

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-key"></i></span>

                 <input type="number" class="form-control input-lg editarTotalvalidacionPro" id="editarTotalvalidacionPro" name="editarTotalvalidacionPro" placeholder="Total H. Validación" min="0"  required>

              </div>

            </div>

            </div>

            <!-- ENTRADA PARA LA COOR -->

             <div class="form-group row">

               <div class="col-xs-4" style="padding:0">

               <label>Días Coord.</label>

                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                   <input type="number" class="form-control input-lg editarDiacoorpro" id="editarDiacoorpro" name="editarDiacoorpro" min="0" placeholder="Días Coord." required>

                </div>

              </div>

              <div class="col-xs-4" style="padding:0">

              <label>Horas Coord.</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                  <input type="number" class="form-control input-lg editarHoracoorPro" id="editarHoracoorPro" name="editarHoracoorPro" min="0" placeholder="Horas Coord." required>

               </div>

             </div>

             <div class="col-xs-4" style="padding:0">

             <label>Total Horas C.</label>

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                 <input type="number" class="form-control input-lg editarTotalhoracoorpro" id="editarTotalhoracoorpro" name="editarTotalhoracoorpro" placeholder="Total Horas C." min="0"  required>

              </div>

            </div>


            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->



            <!-- ENTRADA PARA Total -->

             <div class="form-group row">

               <div class="col-xs-8" style="padding:0">



              </div>

               <div class="col-xs-4" style="padding:0">

               <label>Total Horas Pre Producción</label>


                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-video-camera"></i></span>

                   <input type="number" class="form-control input-lg editarHoraspreproduccion" id="editarHoraspreproduccion" name="editarHoraspreproduccion" placeholder="Total Horas" min="0"  required>

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

          $editarPreproduccion = new ControladorPreproduccion();
          $editarPreproduccion -> ctreditarPreproduccion();

         ?>


      </form>

    </div>

  </div>

</div>

<?php

  $borrarPreproduccion = new ControladorPreproduccion();
  $borrarPreproduccion -> ctrBorrarPreproduccion();

?>
