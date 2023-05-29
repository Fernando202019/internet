<?php if ($configuraciones): ?>
    <table class="table table-bordered table-striped table-hover" id="tbl-configuraciones">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE EMPRESA</th>
                <th>RUC</th>
                <th>TELEFONO</th>
                <th>DIRECCION</th>
                <th>REPRESENTANTE</th>
                <th>ACCIONES:</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($configuraciones->result() as $configuracion): ?>
                <tr>
                    <td><?php echo $configuracion->id_con_aaa; ?></td>
                    <td><?php echo $configuracion->nombrempre_con_aaa; ?></td>
                    <td><?php echo $configuracion->ruc_con_aaa; ?></td>
                    <td><?php echo $configuracion->telefono_con_aaa; ?></td>
                    <td><?php echo $configuracion->direccion_con_aaa; ?></td>
                    <td><?php echo $configuracion->representante_con_aaa; ?></td>
                    <td class="text-center">

                        <a href="<?php echo site_url('configuraciones/eliminar'); ?>/<?php echo $configuracion->id_con_aaa; ?>"class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php  else: ?>
    <div class="alert alert-danger">
        No se encontraron configuraciones registrados.
    </div>
<?php endif; ?>

<script type="text/javascript">
$("#tbl-configuraciones").DataTable();
</script>
<style media="screen">
.dataTables_filter label input{
  border:3px solid red !important;
}
