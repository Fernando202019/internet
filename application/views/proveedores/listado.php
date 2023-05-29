<?php if ($proveedores): ?>
    <table class="table table-bordered table-striped table-hover" id="tbl-proveedores">
        <thead>
            <tr>
                <th>ID</th>
                <th>CEDULA</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>EMAIL</th>
                <th>DIRECCION</th>
                <th>TELEFONO</th>
                <th>ACCIONES:</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proveedores->result() as $provedor): ?>
                <tr>
                    <td><?php echo $provedor->id_pro_aaa; ?></td>
                    <td><?php echo $provedor->cedula_pro_aaa; ?></td>
                    <td><?php echo $provedor->nombre_pro_aaa; ?></td>
                    <td><?php echo $provedor->apellido_pro_aaa; ?></td>
                    <td><?php echo $provedor->email_pro_aaa; ?></td>
                    <td><?php echo $provedor->direccion_pro_aaa; ?></td>
                    <td><?php echo $provedor->telefono_pro_aaa; ?></td>
                    <td class="text-center">
                        <a href="<?php echo site_url('proveedores/actualizar'); ?>/<?php echo $provedor->id_pro_aaa; ?>"class="btn btn-warning">
                        <i class="glyphicon glyphicon-edit"></i>Editar</a>
                        <a href="<?php echo site_url('proveedores/eliminar'); ?>/<?php echo $provedor->id_pro_aaa; ?>"class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php  else: ?>
    <div class="alert alert-danger">
        No se encontraron proveedores registrados.
    </div>
<?php endif; ?>

<script type="text/javascript">
$("#tbl-proveedores").DataTable();
</script>
<style media="screen">
.dataTables_filter label input{
  border:3px solid red !important;
}
