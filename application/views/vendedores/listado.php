<?php if ($vendedores): ?>
    <table class="table table-bordered table-striped table-hover" id="tbl-vendedores">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRES</th>
                <th>CEDULA</th>
                <th>EMAIL</th>
                <th>TELEFONO</th>
                <th>ACCIONES:</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendedores->result() as $vendedor): ?>
                <tr>
                    <td><?php echo $vendedor->id_ven_aaa; ?></td>
                    <td><?php echo $vendedor->nombre_ven_aaa; ?></td>
                    <td><?php echo $vendedor->cedula_ven_aaa; ?></td>
                    <td><?php echo $vendedor->correo_ven_aaa; ?></td>
                    <td><?php echo $vendedor->telefono_ven_aaa; ?></td>
                    <td>
                    <a href="<?php echo site_url('vendedores/actualizar'); ?>/<?php echo $vendedor->id_ven_aaa; ?>"class="btn btn-warning">
                    <i class="glyphicon glyphicon-ok"></i>Editar</a>

                    <a href="<?php echo site_url('vendedores/eliminar'); ?>/<?php echo $vendedor->id_ven_aaa; ?>"class="btn btn-danger">
                    <i class="glyphicon glyphicon-ok"></i>Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php  else: ?>
    <div class="alert alert-danger">
        No se encontraron vendedores registrados.
    </div>
<?php endif; ?>

<script type="text/javascript">
  $("#tbl-vendedores").DataTable();
</script>

<style media="screen">
  .dataTables_filter label input{
    border:3px solid red !important;
  }
