<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Tiempo de Producción

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Tiempo de Producción</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalTiempoProduccion">

          Agregar tiempos

        </button>

      </div>

      <div class="box-body table-responsive">

       <table class="table table-bordered table-striped dt-responsive tablas">

        <thead>

         <tr>

           <th style="width:10px">#</th>
           <th>Día Rodaje</th>
           <th>Horas Rodaje</th>
           <th>Total de H. Rodaje</th>
           <th>Acciónes</th>

         </tr>

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $TiempoProduccion = ControladorTiempoProduccion::ctrMostrarTiempoProduccion($item, $valor);

          foreach ($TiempoProduccion as $key => $value) {

            echo ' <tr>

                    <td>'.($key+1).'</td>

                    <td>'.$value["dia_rodaje"].'</td>
                    <td>'.$value["hora_rodaje"].'</td>
                    <td>'.$value["total_horas_rodaje"].'</td>

                    <td>

                      <div class="btn-group">

                        <button class="btn btn-warning btnEditarTiempoProduccion" idTiempoProduccion="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarTiempoProduccion"><i class="fa fa-pencil"></i></button>

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
MODAL AGREGAR TIEMPOS PRODUCCION
======================================-->

<div id="modalTiempoProduccion" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Tiempos Producción</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA DIAS RODAJE -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaDiasRodaje" placeholder="Ingresar Días Rodaje" required>

              </div>

            </div>


            <!-- ENTRADA PARA HORAS RODAJE -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaHoraRodaje" placeholder="Ingresar Hora Rodaje" required>

              </div>

            </div>


            <!-- ENTRADA PARA TOTAL RODAJE -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaTotalRodaje" placeholder="Total H. Rodaje" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar categoría</button>

        </div>

        <?php

          $crearTiempoProduccion = new ControladorTiempoProduccion();
          $crearTiempoProduccion -> ctrCrearTiempoProduccion();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR CATEGORÍA
======================================-->

<div id="modalEditarTiempoProduccion" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar los Tiempos Producción</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA DIAS RODAJE -->

            <div class="form-group">

              <label>Día Rodaje</label>

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="text" class="form-control input-lg" id="editarDiasRodaje" name="editarDiasRodaje" placeholder="Ingresar Días Rodaje" required>
                <input type="hidden"  name="idTiempoProduccion" id="idTiempoProduccion" required>


              </div>

            </div>


            <!-- ENTRADA PARA HORAS RODAJE -->

            <div class="form-group">

              <label>Día Rodaje</label>

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="text" class="form-control input-lg" id="editarHoraRodaje" name="editarHoraRodaje" placeholder="Ingresar Hora Rodaje" required>

              </div>

            </div>


            <!-- ENTRADA PARA TOTAL RODAJE -->

            <div class="form-group">

              <label>Total de H. Rodaje</label>

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="text" class="form-control input-lg" id="editarTotalRodaje" name="editarTotalRodaje" placeholder="Total H. Rodaje" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar categoría</button>

        </div>

        <?php

          $editarTiempoProduccion = new ControladorTiempoProduccion();
          $editarTiempoProduccion -> ctrEditarTiempoProduccion();

        ?>

      </form>

    </div>

  </div>

</div>

<?php

  $borrarTiempoProduccion = new ControladorTiempoProduccion();
  $borrarTiempoProduccion -> ctrBorrarTiempoProduccion();

?>
