<legend class="text-center">

    <i class="glyphicon glyphicon-user"></i>
    Gestion De Planes
    <br>
<a href="<?php echo site_url('planes/nuevo'); ?>" class="btn btn-success">
                <i class="glyphicon glyphicon-pencil"></i>
                    Agregar Planes
                </a>
</legend>
</br>

<?php if($listadoPlanes): ?>

<table class="table table-bordered table-striped table-hover" id="tbl-planes">
  <thead>
    <tr>
      <th class="text-center1">Id</th>
      <th class="text-center1">Tipo Plan</th>
      <th class="text-center1">Velocidad Requerida</th>
      <th class="text-center1">Costo</th>
      <th class="text-center1">Acciones: </th>
  </thead>

  <tbody>
    <?php foreach ($listadoPlanes->result() as $planTemporal): ?>
    <tr>
        <td class="text-center">
        <?php echo $planTemporal->id_plan_aaa; ?>
        </td>

        <td class="text-center">
        <?php echo $planTemporal->tipo_plan_aaa; ?>
        </td>

        <td class="text-center">
        <?php echo $planTemporal->velocidad_plan_aaa; ?>
        </td>

        <td class="text-center">
        <?php echo $planTemporal->costo_plan_aaa; ?>
        </td>
        <td class="text-center">
            <a href="<?php echo site_url('planes/actualizar'); ?>/<?php echo $planTemporal->id_plan_aaa; ?>"class="btn btn-danger">
            <i class="glyphicon glyphicon-ok"></i>Editar</a>
            <a href="<?php echo site_url('planes/borrar'); ?>/<?php echo $planTemporal->id_plan_aaa; ?>"class="btn btn-warning">
            <i class="glyphicon glyphicon-ok"></i>Eliminar</a>
        </td>
    </tr>

    <?php endforeach; ?>

    </tbody>

</table>

<?php else: ?>
    <center><h3><b>No Existe Clientes</b></h3></center>
<?php endif; ?>

<script type="text/javascript">
$("#tbl-planes").DataTable();
</script>
<style media="screen">
.dataTables_filter label input{
  border:3px solid red !important;
}
