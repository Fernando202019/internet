<?php if ($sucursales): ?>
    <table class="table table-bordered table-striped table-hover" id="tbl-sucursales">
        <thead>
            <tr>
                <th>ID</th>
                <th>PROVINCIA</th>
                <th>CUIDAD</th>
                <th>ESTADO</th>
                <th>DIRECCION</th>
                <th>EMAIL</th>
                <th>ACCIONES:</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sucursales->result() as $sucursal): ?>
                <tr>
                    <td><?php echo $sucursal->id_suc_aaa; ?></td>
                    <td><?php echo $sucursal->provincia_suc_aaa; ?></td>
                    <td><?php echo $sucursal->ciudad_suc_aaa; ?></td>
                    <td><?php echo $sucursal->estado_suc_aaa; ?></td>
                    <td><?php echo $sucursal->direccion_suc_aaa; ?></td>
                    <td><?php echo $sucursal->email_suc_aaa; ?></td>
                    <td class="text-center">
                       
                        <a href="<?php echo site_url('sucursales/eliminar'); ?>/<?php echo $sucursal->id_suc_aaa; ?>"class="btn btn-danger">
                        <i class="glyphicon glyphicon-ok"></i>Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php  else: ?>
    <div class="alert alert-danger">
        No se encontraron sucursales registrados.
    </div>
<?php endif; ?>

<script type="text/javascript">
  $("#tbl-sucursales").DataTable();
</script>

<style media="screen">
  .dataTables_filter label input{
    border:3px solid red !important;
  }