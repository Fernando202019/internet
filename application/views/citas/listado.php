<?php if ($citas): ?>
    <table class="table table-bordered table-striped table-hover" id="tbl-citas">
        <thead>
            <tr>
                <th>ID</th>
                <th>CEDULA</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>EMAIL</th>
                <th>CELULAR</th>
                <th>PROVINCIA</th>
                <th>SUCURSAL</th>
                <th>FECHA</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($citas->result() as $cita): ?>
                <tr>
                    <td><?php echo $cita->id_cit_aaa; ?></td>
                    <td><?php echo $cita->cedula_cit_aaa; ?></td>
                    <td><?php echo $cita->nombre_cit_aaa; ?></td>
                    <td><?php echo $cita->apellido_cit_aaa; ?></td>
                    <td><?php echo $cita->email_cit_aaa; ?></td>
                    <td><?php echo $cita->celular_cit_aaa; ?></td>
                    <td><?php echo $cita->provincia_cit_aaa; ?></td>
                    <td><?php echo $cita->sucursal_cit_aaa; ?></td>
                    <td><?php echo $cita->fecha_cit_aaa; ?></td>
                    <td class="text-center">
                      <a href="<?php echo site_url('citas/actualizar'); ?>/<?php echo $cita->id_cit_aaa; ?>"class="btn btn-warning">
                      <i class="glyphicon glyphicon-ok"></i>Editar</a>

                      <a href="<?php echo site_url('citas/eliminar'); ?>/<?php echo $cita->id_cit_aaa; ?>"class="btn btn-danger">
                      <i class="glyphicon glyphicon-ok"></i>Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php  else: ?>
    <div class="alert alert-danger">
        No se encontraron citas registradas.
    </div>
<?php endif; ?>
<script type="text/javascript">
  $("#tbl-citas").DataTable();
</script>

<style media="screen">
  .dataTables_filter label input{
    border:3px solid red !important;
  }
