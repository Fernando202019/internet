<div class="row">
  <div class="col-md-12 text-center well">
      <h3>ACTUALIZAR PLAN</h3>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <?php if ($planEditar): ?>
        <!-- <?php print_r($planEditar); ?> -->
        <form class="" action="<?php echo site_url('planes/procesarActualizacion'); ?>" method="post">
            <center>
              <input type="hidden" name="id_plan_aaa"
              value="<?php echo $planEditar->id_plan_aaa ; ?>">
            </center>
            <div class="row">
            <div class="col-md-4 text-right">
                <label for="">TIPO PLAN:</label>
            </div>
           <div class="col-md-7">
            <input type="text" name="tipo_plan_aaa" value="<?php echo $planEditar->tipo_plan_aaa; ?>" class="form-control" placeholder="Ingrese tipo de plan" required>
           </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">VELOCIDAD PLAN:</label>
            </div>
           <div class="col-md-7">
            <input type="text" name="velocidad_plan_aaa" value="<?php echo $planEditar->velocidad_plan_aaa; ?>" class="form-control" placeholder="Ingrese velocidad plna" required>

           </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">COSTO:</label>
            </div>
           <div class="col-md-7">
            <input type="text" name="costo_plan_aaa" value="<?php echo $planEditar->costo_plan_aaa; ?>" class="form-control" placeholder="Ingrese el costo del plan" required>

           </div>
        </div>

            <br>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-7">
                  <button type="submit" name="button"
                          class="btn btn-warning">
                     <i class="glyphicon glyphicon-ok"></i>
                     Actualizar
                  </button>
                  <a href="<?php echo site_url('planes/index'); ?>"
                    class="btn btn-danger">
                    <i class="glyphicon glyphicon-remove"></i>
                    Cancelar
                  </a>
              </div>
            </div>
        </form>

    <?php else: ?>
        <div class="alert alert-danger">
            <b>No se encontro al plan :(</b>
        </div>
    <?php endif; ?>
  </div>
</div>
