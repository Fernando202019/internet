<br>
<center>
  <h1><b>LISTADO DE PLANES</b></h1>
  <br>
  <a href="<?php echo site_url('tipos/nuevo'); ?>"
    class="btn btn-primary">
    Agregar Nuevo Plan
  </a>
</center>

<table class="table table-bordered table-striped table-hover" id="tbl-tipos">
  <thead>
    <tr>
      <th class="text-center">ID</th>
      <th class="text-center">CLIENTE</th>
      <th class="text-center">PLAN</th>
      <th class="text-center">ACCIONES:</th>
    </tr>
  </thead>
  <tbody>
      <?php if ($listadoTipos): ?>
          <?php foreach ($listadoTipos->result() as $tipo): ?>
            <tr>
                <td class="text-center">
                  <?php echo $tipo->id_tipo_aaa; ?>
                </td>
                <td class="text-center">
                  <?php echo $tipo->nombre_cli_aaa; ?>
                  <?php echo $tipo->apellido_cli_aaa; ?>
                </td>

                <td class="text-center">
                    <?php echo $tipo->tipo_plan_aaa; ?>
                    <?php echo $tipo->velocidad_plan_aaa; ?>
                </td>

                <td class="text-center">
                    <a href="<?php echo site_url('tipos/editar').'/'.$tipo->id_tipo_aaa; ?>" class="btn btn-warning">
                      <i class="glyphicon glyphicon-edit"></i>
                      Editar
                    </a>
                    <a href="#" class="btn btn-danger">
                      <i class="glyphicon glyphicon-trash"></i>
                      Eliminar
                    </a>
                </td>

            </tr>
          <?php endforeach; ?>
      <?php endif; ?>
  </tbody>
</table>

<script type="text/javascript">
$("#tbl-tipos").DataTable();
</script>
<style media="screen">
.dataTables_filter label input{
  border:3px solid red !important;
}