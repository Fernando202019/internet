<div class="container">
  <center>
    <h3><b>Actualizar Plan</b></h3>
  </center>
  <br>
  <form class=""
  action="<?php echo site_url('tipos/actualizarTipo'); ?>"
  method="post">

    <input type="hidden" name="id_tipo_aaa" value="<?php echo $tipo->id_tipo_aaa; ?>">

    <b>Cliente:</b> <br>
    <select class="form-control" name="fk_id_cli_aaa"
    id="fk_id_cli_aaa" required data-live-search="true">
        <option value="">--Seleccione el Cliente--</option>
        <?php if ($listadoClientes): ?>
            <?php foreach ($listadoClientes->result()
            as $clienteTemporal): ?>
              <option value="<?php echo $clienteTemporal->id_cli_aaa; ?>">
                <?php echo $clienteTemporal->nombre_cli_aaa; ?>
                <?php echo $clienteTemporal->apellido_cli_aaa; ?>
                |
                <?php echo $clienteTemporal->correo_cli_aaa; ?>
              </option>
            <?php endforeach; ?>
        <?php endif; ?>
    </select>
    <br>
    <b>Plan:</b> <br>
    <select class="form-control" name="fk_id_plan_aaa"
    id="fk_id_plan_aaa" required data-live-search="true">
        <option value="">--Seleccione Plan--</option>
        <?php if ($listadoPlanes): ?>
            <?php foreach ($listadoPlanes->result() as $plan): ?>
                <option value="<?php echo $plan->id_plan_aaa; ?>">
                  <?php echo $plan->tipo_plan_aaa; ?>
                </option>
            <?php endforeach; ?>
        <?php endif; ?>
    </select>
    <br>

    <button type="submit" name="button" class="btn btn-success">
      Guardar
    </button>
    <a href="<?php echo site_url('tipos/index'); ?>"
      class="btn btn-danger">
      Cancelar
    </a>
  </form>

</div>




<script type="text/javascript">
   $('#fk_id_cli_aaa').
   val("<?php echo $matricula->fk_id_cli_aaa; ?>");
   $('#fk_id_plan_aaa').
   val("<?php echo $matricula->fk_id_plan_aaa; ?>");
   $('#fk_id_cli_aaa').selectpicker();
   $('#fk_id_plan_aaa').selectpicker();
</script>



<!--  -->