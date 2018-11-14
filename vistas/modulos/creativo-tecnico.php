 <div class="content-wrapper">

  <section class="content-header">

    <h1>

      Personal Creativo Técnico

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Personal Creativo Técnico</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalCreativoTecnico">

          Agregar Personal

        </button>

      </div>

      <div class="box-body table-responsive">

       <table class="table table-bordered table-striped dt-responsive tablas">

        <thead>

         <tr>

           <th style="width:10px">#</th>
           <th>Días</th>
           <th>Costo Día</th>
           <th>Costo Total Personal P.P</th>
           <th>Mas detalles</th>
           <th>Acciónes</th>

         </tr>

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $TiempoProduccion = ControladorCreativoTecnico::ctrMostrarCreativoTecnico($item, $valor);

          foreach ($TiempoProduccion as $key => $value) {

            echo ' <tr>

                    <td>'.($key+1).'</td>

                    <td>'.$value["dias_estimados"].'</td>
                    <td>'.number_format($value["costo_dia_cre_tec"],2).'</td>
                    <td>'.number_format($value["total_costo_cre_tec"],2).'</td>

                    <td>

                      <div class="btn-group">

                        <button class="btn btn-info btnEditarTiempoProduccion" idTiempoProduccion="'.$value["id"].'" data-toggle="modal" data-target="#modalVerCreativoTecnico">  <i class="fa fa-search"></i></button>


                      </div>

                    </td>

                    <td>

                      <div class="btn-group">

                        <button class="btn btn-warning btnEditarTiempoProduccion" idTiempoProduccion="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarCreativoTecnico"><i class="fa fa-pencil"></i></button>

                        <button class="btn btn-danger btnEliminarTiempoProduccion" idTiempoProduccion="'.$value["id"].'"><i class="fa fa-times"></i></button>

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
MODAL VER DETALLES
======================================-->

<div id="modalVerCreativoTecnico" class="modal fade" role="dialog">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <center><h4 class="modal-title">Personal Creativo-Técnico</h4></center>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA DIAS -->

           <div class="form-group row">
             <div class="col-xs-4" style="padding:0">
               <label>Días Estimados</label>
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-user"></i></span>
                 <input type="number" class="form-control input-lg verDiaestimado" id="verDiaestimado" name="verDiaestimado" min="0" placeholder="Días Guión"  >
               </div>
             </div>

            <div class="col-xs-4" style="padding:0">
            </div>

            <div class="col-xs-4" style="padding:0">
              <label>Costo Día</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="number" class="form-control input-lg verDiaestimado" id="verDiaestimado" name="verDiaestimado" min="0" placeholder="Costo Día"  >
              </div>
            </div>

           </div>

           <hr>

           <!-- ENTRADA PARA PRODUCCTOR -->

          <div class="form-group row">
            <div class="col-xs-4" style="padding:0">
              <label>Personal Creativo</label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg verProductor" id="verProductor" name="verProductor" min="0" placeholder="Productor"  >
            </div>
            </div>
          </div>


            <!-- ENTRADA DATOS PÁRA PRODUCTOR -->

            <div class="form-group row">

              <div class="col-xs-3" style="padding:0">

                <label>Tarifa Dia</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="number" class="form-control input-lg verTarfPro" id="verTarfPro" name="verTarfPro" min="0" placeholder="Tarifa Día"  >

                </div>

              </div>


              <div class="col-xs-3" style="padding:0">

                <label>Costo Hora</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="number" class="form-control input-lg verHoraPro" id="verHoraPro" name="verHoraPro" min="0" placeholder="Costo Hora"  >

                </div>

              </div>


              <div class="col-xs-3" style="padding:0">

                <label>Horas Meta</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="number" class="form-control input-lg verHoraMetaPro" id="verHoraMetaPro" name="verHoraMetaPro" min="0" placeholder="Horas Meta"  >

                </div>

              </div>


              <div class="col-xs-3" style="padding:0">

                <label>Costo Personal</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="number" class="form-control input-lg verSubTPro" id="verSubTPro"  name="verSubTPro" placeholder="SubTotal" min="0"   >

                </div>

              </div>


            </div>


            <!-- ENTRADA PARA DIRECTOR -->

           <div class="form-group row">
             <div class="col-xs-4" style="padding:0">
               <label>Personal Creativo</label>
               <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user"></i></span>
               <input type="text" class="form-control input-lg verDirector" id="verDirector" name="verDirector" min="0" placeholder="Sonidista"  >
             </div>
             </div>
           </div>


            <!-- ENTRADA PARA EL DIRECTOR -->

             <div class="form-group row">

               <div class="col-xs-3" style="padding:0">

                 <label>Tarifa Costo</label>

                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-key"></i></span>

                   <input type="text" class="form-control input-lg verTarfDir" id="verTarfDir" name="verTarfDir" min="0" placeholder="Tarifa Día"  >

                </div>

              </div>

              <div class="col-xs-3" style="padding:0">

                <label>Costo Hora</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="text" class="form-control input-lg verHoraDir" id="verHoraDir" name="verHoraDir" min="0" placeholder="Costo Hora"  >

               </div>

             </div>

             <div class="col-xs-3" style="padding:0">

               <label>Horas Meta</label>

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-user"></i></span>

                 <input type="number" class="form-control input-lg verHoraMetaDir" id="verHoraMetaDir" name="verHoraMetaDir" min="0" placeholder="Horas Meta"  >

               </div>

             </div>



             <div class="col-xs-3" style="padding:0">

               <label>Costo Personal</label>

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-key"></i></span>

                 <input type="number" class="form-control input-lg verSubtDir" id="verSubtDir" name="verSubtDir" placeholder="SubTotal" min="0"   >

              </div>

            </div>

            </div>


            <!-- ENTRADA PARA SONIDO -->

           <div class="form-group row">
             <div class="col-xs-4" style="padding:0">
               <label>Personal Creativo</label>
               <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user"></i></span>
               <input type="text" class="form-control input-lg verSonido" id="verSonido" name="verSonido" min="0" placeholder="Dir. Foto/Cam"  >
             </div>
             </div>
           </div>


            <!-- ENTRADA PARA LA SONIDO -->

             <div class="form-group row">

               <div class="col-xs-3" style="padding:0">

                 <label>Tarifa Costo</label>

                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                   <input type="number" class="form-control input-lg verTarifSonido" id="verTarifSonido" name="verTarifSonido" min="0" placeholder="Tarifa Día"  >

                </div>

              </div>

              <div class="col-xs-3" style="padding:0">

                <label>Costo Hora</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                  <input type="number" class="form-control input-lg verHoraSonido" id="verHoraSonido" name="verHoraSonido" min="0" placeholder="Costo Hora"  >

               </div>

             </div>


             <div class="col-xs-3" style="padding:0">

               <label>Horas Meta</label>

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-user"></i></span>

                 <input type="number" class="form-control input-lg verHoraMetaSonido" id="verHoraMetaSonido" name="verHoraMetaSonido" min="0" placeholder="Horas Meta"  >

               </div>

             </div>


             <div class="col-xs-3" style="padding:0">

               <label>Costo Personal</label>

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                 <input type="number" class="form-control input-lg verSubtSonido" id="verSubtSonido" name="verSubtSonido" placeholder="SubTotal" min="0"   >

              </div>

            </div>


            </div>

            <!-- ENTRADA PARA FOTOGRAFO -->

           <div class="form-group row">
             <div class="col-xs-4" style="padding:0">
               <label>Personal Crativo</label>
               <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user"></i></span>
               <input type="text" class="form-control input-lg verFotogr" id="verFotogr" name="verFotogr" min="0" placeholder="Ast. Foto"  >
             </div>
             </div>
           </div>

           <!-- ENTRADA PARA FOTOGRAFO -->

           <div class="form-group row">

             <div class="col-xs-3" style="padding:0">

               <label>Tarifa Costo</label>

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                 <input type="number" class="form-control input-lg verTarifFotogr" id="verTarifFotogr" name="verTarifFotogr" min="0" placeholder="Tarifa Día"  >

              </div>

            </div>

            <div class="col-xs-3" style="padding:0">

              <label>Costo Hora</label>

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                <input type="number" class="form-control input-lg verHoraFotogr" id="verHoraFotogr" name="verHoraFotogr" min="0" placeholder="Costo Hora"  >

             </div>

           </div>


           <div class="col-xs-3" style="padding:0">

             <label>Horas Meta</label>

             <div class="input-group">

               <span class="input-group-addon"><i class="fa fa-user"></i></span>

               <input type="number" class="form-control input-lg verHoraMetaFotogr" id="verHoraMetaFotogr" name="verHoraMetaFotogr" min="0" placeholder="Horas Meta"  >

             </div>

           </div>


           <div class="col-xs-3" style="padding:0">

             <label>Costo Personal</label>

             <div class="input-group">

               <span class="input-group-addon"><i class="fa fa-lock"></i></span>

               <input type="number" class="form-control input-lg verSubtFotogr" id="verSubtFotogr" name="verSubtFotogr" placeholder="SubTotal" min="0"   >

            </div>

          </div>


          </div>

          <hr>


            <!-- ENTRADA PARA Total -->

             <div class="form-group row">

               <div class="col-xs-9" style="padding:0">


              </div>

               <div class="col-xs-3" style="padding:0">

                 <label>Total Costo Personal</label>

                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-video-camera"></i></span>

                   <input type="number" class="form-control input-lg verHoraspreproduccion" id="verHoraspreproduccion" name="verHoraspreproduccion" placeholder="Total Horas" min="0"   >

                </div>

              </div>


            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-center" data-dismiss="modal">Salir</button>


        </div>


      </form>

    </div>

  </div>

</div>






<!--=====================================
MODAL AGREGAR PERSONAL CREATIVO
======================================-->


<div id="modalCreativoTecnico" class="modal fade" role="dialog">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <center><h4 class="modal-title">Nuevo Personal Creativo-Técnico</h4></center>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA DIAS -->

           <div class="form-group row">
             <div class="col-xs-4" style="padding:0">
               <label>Días Estimados</label>
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-user"></i></span>
                 <input type="number" class="form-control input-lg nuevoDiaestimado" id="nuevoDiaestimado" name="nuevoDiaestimado" min="0" placeholder="Días Guión"  >
               </div>
             </div>


              <div class="col-xs-4" style="padding:0">

                <label>Horas Meta</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>


                  <select class="form-control input-lg nuevoHorametage" id="nuevoHorametage" name="nuevoHorametage"  >

                    <option value="">Seleccione</option>

                      <?php

                      $item = null;
                      $value = null;

                      $TiempoProduccion = ControladorTiempoProduccion::ctrMostrarTiempoProduccion($item, $valor);


                      foreach ($TiempoProduccion as $key => $value) {

                        echo '<option value="'.$value["id"].'">'.$value["total_horas_rodaje"].'</option>';
                      }

                      ?>




                  </select>


                  <!-- <input type="number" class="form-control input-lg nuevoHoraMetaPro" id="nuevoHoraMetaPro" name="nuevoHoraMetaPro" min="0" placeholder="Horas Meta"  > -->

                </div>

              </div>



            <div class="col-xs-4" style="padding:0">
              <label>Costo Día</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="number" class="form-control input-lg nuevoCostoes" id="nuevoCostoes" name="nuevoCostoes" min="0" placeholder="Costo Día"  >
              </div>
            </div>

           </div>

           <hr>

           <!-- ENTRADA PARA PRODUCCTOR -->

          <div class="form-group row">
            <div class="col-xs-4" style="padding:0">
              <label>Personal Creativo</label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg nuevoProductor" id="nuevoProductor" name="nuevoProductor" min="0" placeholder="Productor"  >
            </div>
            </div>
          </div>


            <!-- ENTRADA DATOS PÁRA PRODUCTOR -->

            <div class="form-group row">

              <div class="col-xs-4" style="padding:0">

                <label>Tarifa Dia</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="number" class="form-control input-lg nuevoTarfPro" id="nuevoTarfPro" name="nuevoTarfPro" min="0" placeholder="Tarifa Día"  >

                </div>

              </div>


              <div class="col-xs-4" style="padding:0">

                <label>Costo Hora</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="number" class="form-control input-lg nuevoHoraPro" id="nuevoHoraPro" name="nuevoHoraPro" min="0" placeholder="Costo Hora"  >

                </div>

              </div>




              <div class="col-xs-4" style="padding:0">

                <label>Costo Personal</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="number" class="form-control input-lg nuevoSubTPro" id="nuevoSubTPro"  name="nuevoSubTPro" placeholder="SubTotal" min="0"   >

                </div>

              </div>


            </div>


            <!-- ENTRADA PARA DIRECTOR -->

           <div class="form-group row">
             <div class="col-xs-4" style="padding:0">
               <label>Personal Creativo</label>
               <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user"></i></span>
               <input type="text" class="form-control input-lg nuevoDirector" id="nuevoDirector" name="nuevoDirector" min="0" placeholder="Sonidista"  >
             </div>
             </div>
           </div>


            <!-- ENTRADA PARA EL DIRECTOR -->

             <div class="form-group row">

               <div class="col-xs-4" style="padding:0">

                 <label>Tarifa Costo</label>

                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-key"></i></span>

                   <input type="text" class="form-control input-lg nuevoTarfDir" id="nuevoTarfDir" name="nuevoTarfDir" min="0" placeholder="Tarifa Día"  >

                </div>

              </div>

              <div class="col-xs-4" style="padding:0">

                <label>Costo Hora</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="text" class="form-control input-lg nuevoHoraDir" id="nuevoHoraDir" name="nuevoHoraDir" min="0" placeholder="Costo Hora"  >

               </div>

             </div>





             <div class="col-xs-4" style="padding:0">

               <label>Costo Personal</label>

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-key"></i></span>

                 <input type="number" class="form-control input-lg nuevoSubtDir" id="nuevoSubtDir" name="nuevoSubtDir" placeholder="SubTotal" min="0"   >

              </div>

            </div>

            </div>


            <!-- ENTRADA PARA SONIDO -->

           <div class="form-group row">
             <div class="col-xs-4" style="padding:0">
               <label>Personal Creativo</label>
               <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user"></i></span>
               <input type="text" class="form-control input-lg nuevoSonido" id="nuevoSonido" name="nuevoSonido" min="0" placeholder="Dir. Foto/Cam"  >
             </div>
             </div>
           </div>


            <!-- ENTRADA PARA LA SONIDO -->

             <div class="form-group row">

               <div class="col-xs-4" style="padding:0">

                 <label>Tarifa Costo</label>

                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                   <input type="number" class="form-control input-lg nuevoTarifSonido" id="nuevoTarifSonido" name="nuevoTarifSonido" min="0" placeholder="Tarifa Día"  >

                </div>

              </div>

              <div class="col-xs-4" style="padding:0">

                <label>Costo Hora</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                  <input type="number" class="form-control input-lg nuevoHoraSonido" id="nuevoHoraSonido" name="nuevoHoraSonido" min="0" placeholder="Costo Hora"  >

               </div>

             </div>





             <div class="col-xs-4" style="padding:0">

               <label>Costo Personal</label>

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                 <input type="number" class="form-control input-lg nuevoSubtSonido" id="nuevoSubtSonido" name="nuevoSubtSonido" placeholder="SubTotal" min="0"   >

              </div>

            </div>


            </div>

            <!-- ENTRADA PARA FOTOGRAFO -->

           <div class="form-group row">
             <div class="col-xs-4" style="padding:0">
               <label>Personal Crativo</label>
               <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user"></i></span>
               <input type="text" class="form-control input-lg nuevoFotogr" id="nuevoFotogr" name="nuevoFotogr" min="0" placeholder="Ast. Foto"  >
             </div>
             </div>
           </div>

           <!-- ENTRADA PARA FOTOGRAFO -->

           <div class="form-group row">

             <div class="col-xs-4" style="padding:0">

               <label>Tarifa Costo</label>

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                 <input type="number" class="form-control input-lg nuevoTarifFotogr" id="nuevoTarifFotogr" name="nuevoTarifFotogr" min="0" placeholder="Tarifa Día"  >

              </div>

            </div>

            <div class="col-xs-4" style="padding:0">

              <label>Costo Hora</label>

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                <input type="number" class="form-control input-lg nuevoHoraFotogr" id="nuevoHoraFotogr" name="nuevoHoraFotogr" min="0" placeholder="Costo Hora"  >

             </div>

           </div>





           <div class="col-xs-4" style="padding:0">

             <label>Costo Personal</label>

             <div class="input-group">

               <span class="input-group-addon"><i class="fa fa-lock"></i></span>

               <input type="number" class="form-control input-lg nuevoSubtFotogr" id="nuevoSubtFotogr" name="nuevoSubtFotogr" placeholder="SubTotal" min="0"   >

            </div>

          </div>


          </div>

          <hr>


            <!-- ENTRADA PARA Total -->

             <div class="form-group row">

               <div class="col-xs-8" style="padding:0">


              </div>

               <div class="col-xs-4" style="padding:0">

                 <label>Total Costo Personal</label>

                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-video-camera"></i></span>

                   <input type="number" class="form-control input-lg nuevoHoraspreproduccion" id="nuevoHoraspreproduccion" name="nuevoHoraspreproduccion" placeholder="Total Horas" min="0"   >

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

          $crearCreativoTecnico = new ControladorCreativoTecnico();
          $crearCreativoTecnico -> ctrCrearCreativoTecnico();

         ?>



      </form>

    </div>

  </div>

</div>





<!--=====================================
MODAL EDITAR CATEGORÍA
======================================-->


<div id="modalEditarCreativoTecnico" class="modal fade" role="dialog">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <center><h4 class="modal-title">Editar Personal Creativo-Técnico</h4></center>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA DIAS -->

           <div class="form-group row">
             <div class="col-xs-4" style="padding:0">
               <label>Días Estimados</label>
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-user"></i></span>
                 <input type="number" class="form-control input-lg editarDiaestimado" id="editarDiaestimado" name="editarDiaestimado" min="0" placeholder="Días Guión"  >
               </div>
             </div>

            <div class="col-xs-4" style="padding:0">
            </div>

            <div class="col-xs-4" style="padding:0">
              <label>Costo Día</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="number" class="form-control input-lg editarDiaestimado" id="editarDiaestimado" name="editarDiaestimado" min="0" placeholder="Costo Día"  >
              </div>
            </div>

           </div>

           <hr>

           <!-- ENTRADA PARA PRODUCCTOR -->

          <div class="form-group row">
            <div class="col-xs-4" style="padding:0">
              <label>Personal Creativo</label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg editarProductor" id="editarProductor" name="editarProductor" min="0" placeholder="Productor"  >
            </div>
            </div>
          </div>


            <!-- ENTRADA DATOS PÁRA PRODUCTOR -->

            <div class="form-group row">

              <div class="col-xs-3" style="padding:0">

                <label>Tarifa Dia</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="number" class="form-control input-lg editarTarfPro" id="editarTarfPro" name="editarTarfPro" min="0" placeholder="Tarifa Día"  >

                </div>

              </div>


              <div class="col-xs-3" style="padding:0">

                <label>Costo Hora</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="number" class="form-control input-lg editarHoraPro" id="editarHoraPro" name="editarHoraPro" min="0" placeholder="Costo Hora"  >

                </div>

              </div>


              <div class="col-xs-3" style="padding:0">

                <label>Horas Meta</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="number" class="form-control input-lg editarHoraMetaPro" id="editarHoraMetaPro" name="editarHoraMetaPro" min="0" placeholder="Horas Meta"  >

                </div>

              </div>


              <div class="col-xs-3" style="padding:0">

                <label>Costo Personal</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="number" class="form-control input-lg editarSubTPro" id="editarSubTPro"  name="editarSubTPro" placeholder="SubTotal" min="0"   >

                </div>

              </div>


            </div>


            <!-- ENTRADA PARA DIRECTOR -->

           <div class="form-group row">
             <div class="col-xs-4" style="padding:0">
               <label>Personal Creativo</label>
               <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user"></i></span>
               <input type="text" class="form-control input-lg editarDirector" id="editarDirector" name="editarDirector" min="0" placeholder="Sonidista"  >
             </div>
             </div>
           </div>


            <!-- ENTRADA PARA EL DIRECTOR -->

             <div class="form-group row">

               <div class="col-xs-3" style="padding:0">

                 <label>Tarifa Costo</label>

                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-key"></i></span>

                   <input type="text" class="form-control input-lg editarTarfDir" id="editarTarfDir" name="editarTarfDir" min="0" placeholder="Tarifa Día"  >

                </div>

              </div>

              <div class="col-xs-3" style="padding:0">

                <label>Costo Hora</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="text" class="form-control input-lg editarHoraDir" id="editarHoraDir" name="editarHoraDir" min="0" placeholder="Costo Hora"  >

               </div>

             </div>

             <div class="col-xs-3" style="padding:0">

               <label>Horas Meta</label>

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-user"></i></span>

                 <input type="number" class="form-control input-lg editarHoraMetaDir" id="editarHoraMetaDir" name="editarHoraMetaDir" min="0" placeholder="Horas Meta"  >

               </div>

             </div>



             <div class="col-xs-3" style="padding:0">

               <label>Costo Personal</label>

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-key"></i></span>

                 <input type="number" class="form-control input-lg editarSubtDir" id="editarSubtDir" name="editarSubtDir" placeholder="SubTotal" min="0"   >

              </div>

            </div>

            </div>


            <!-- ENTRADA PARA SONIDO -->

           <div class="form-group row">
             <div class="col-xs-4" style="padding:0">
               <label>Personal Creativo</label>
               <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user"></i></span>
               <input type="text" class="form-control input-lg editarSonido" id="editarSonido" name="editarSonido" min="0" placeholder="Dir. Foto/Cam"  >
             </div>
             </div>
           </div>


            <!-- ENTRADA PARA LA SONIDO -->

             <div class="form-group row">

               <div class="col-xs-3" style="padding:0">

                 <label>Tarifa Costo</label>

                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                   <input type="number" class="form-control input-lg editarTarifSonido" id="editarTarifSonido" name="editarTarifSonido" min="0" placeholder="Tarifa Día"  >

                </div>

              </div>

              <div class="col-xs-3" style="padding:0">

                <label>Costo Hora</label>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                  <input type="number" class="form-control input-lg editarHoraSonido" id="editarHoraSonido" name="editarHoraSonido" min="0" placeholder="Costo Hora"  >

               </div>

             </div>


             <div class="col-xs-3" style="padding:0">

               <label>Horas Meta</label>

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-user"></i></span>

                 <input type="number" class="form-control input-lg editarHoraMetaSonido" id="editarHoraMetaSonido" name="editarHoraMetaSonido" min="0" placeholder="Horas Meta"  >

               </div>

             </div>


             <div class="col-xs-3" style="padding:0">

               <label>Costo Personal</label>

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                 <input type="number" class="form-control input-lg editarSubtSonido" id="editarSubtSonido" name="editarSubtSonido" placeholder="SubTotal" min="0"   >

              </div>

            </div>


            </div>

            <!-- ENTRADA PARA FOTOGRAFO -->

           <div class="form-group row">
             <div class="col-xs-4" style="padding:0">
               <label>Personal Crativo</label>
               <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user"></i></span>
               <input type="text" class="form-control input-lg editarFotogr" id="editarFotogr" name="editarFotogr" min="0" placeholder="Ast. Foto"  >
             </div>
             </div>
           </div>

           <!-- ENTRADA PARA FOTOGRAFO -->

           <div class="form-group row">

             <div class="col-xs-3" style="padding:0">

               <label>Tarifa Costo</label>

               <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                 <input type="number" class="form-control input-lg editarTarifFotogr" id="editarTarifFotogr" name="editarTarifFotogr" min="0" placeholder="Tarifa Día"  >

              </div>

            </div>

            <div class="col-xs-3" style="padding:0">

              <label>Costo Hora</label>

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                <input type="number" class="form-control input-lg editarHoraFotogr" id="editarHoraFotogr" name="editarHoraFotogr" min="0" placeholder="Costo Hora"  >

             </div>

           </div>


           <div class="col-xs-3" style="padding:0">

             <label>Horas Meta</label>

             <div class="input-group">

               <span class="input-group-addon"><i class="fa fa-user"></i></span>

               <input type="number" class="form-control input-lg editarHoraMetaFotogr" id="editarHoraMetaFotogr" name="editarHoraMetaFotogr" min="0" placeholder="Horas Meta"  >

             </div>

           </div>


           <div class="col-xs-3" style="padding:0">

             <label>Costo Personal</label>

             <div class="input-group">

               <span class="input-group-addon"><i class="fa fa-lock"></i></span>

               <input type="number" class="form-control input-lg editarSubtFotogr" id="editarSubtFotogr" name="editarSubtFotogr" placeholder="SubTotal" min="0"   >

            </div>

          </div>


          </div>

          <hr>


            <!-- ENTRADA PARA Total -->

             <div class="form-group row">

               <div class="col-xs-9" style="padding:0">


              </div>

               <div class="col-xs-3" style="padding:0">

                 <label>Total Costo Personal</label>

                 <div class="input-group">

                   <span class="input-group-addon"><i class="fa fa-video-camera"></i></span>

                   <input type="number" class="form-control input-lg editarHoraspreproduccion" id="editarHoraspreproduccion" name="editarHoraspreproduccion" placeholder="Total Horas" min="0"   >

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


<?php

  // $borrarTiempoProduccion = new ControladorTiempoProduccion();
  // $borrarTiempoProduccion -> ctrBorrarTiempoProduccion();

?>
