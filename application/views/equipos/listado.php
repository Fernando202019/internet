<?php if ($equipos): ?>
    <table class="table table-bordered table-striped table-hover" id="tbl-equipos">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE EQUIPO</th>
                <th>PRECIO</th>
                <th>DESCRIPCION</th>
                <th>ACCIONES:</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipos->result() as $equipo): ?>
                <tr>
                    <td><?php echo $equipo->id_equi_aaa; ?></td>
                    <td><?php echo $equipo->nombre_equi_aaa; ?></td>
                    <td><?php echo $equipo->precio_equi_aaa; ?></td>
                    <td><?php echo $equipo->descripcion_equi_aaa; ?></td>
                   
                    <td class="text-center">
                    <a href="<?php echo site_url('equipos/actualizar'); ?>/<?php echo $equipo->id_equi_aaa; ?>"class="btn btn-warning">
                    <i class="glyphicon glyphicon-ok"></i>Editar</a>
                    <a href="<?php echo site_url('equipos/eliminar'); ?>/<?php echo $equipo->id_equi_aaa; ?>"class="btn btn-danger">
                    <i class="glyphicon glyphicon-ok"></i>Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php  else: ?>
    <div class="alert alert-danger">
        No se encontraron equipos registrados.
    </div>
<?php endif; ?>

<script type="text/javascript">
  $("#tbl-equipos").DataTable();
</script>

<style media="screen">
  .dataTables_filter label input{
    border:3px solid red !important;
  }