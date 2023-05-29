<legend class="text-center">

    <i class="glyphicon glyphicon-user"></i>
    Gestion De Clientes
    <br>
<a href="<?php echo site_url('clientes/nuevo'); ?>" class="btn btn-success">
                <i class="glyphicon glyphicon-pencil"></i>
                    Agregar Clientes
                </a>
</legend>
</br>

<?php if($listadoClientes): ?>

<table id="tbl-clientes" class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th class="text-center1">Id</th>
      <th class="text-center1">Nombre</th>
      <th class="text-center1">Apellido</th>
      <th class="text-center1">Direccion</th>
      <th class="text-center1">Email</th>
      <th class="text-center1">Acciones: </th>
  </thead>

  <tbody>
    <?php foreach ($listadoClientes->result() as $clienteTemporal): ?>
    <tr>
        <td class="text-center">
        <?php echo $clienteTemporal->id_cli_aaa; ?>
        </td>

        <td class="text-center">
        <?php echo $clienteTemporal->nombre_cli_aaa; ?>
        </td>

        <td class="text-center">
        <?php echo $clienteTemporal->apellido_cli_aaa; ?>
        </td>

        <td class="text-center">
        <?php echo $clienteTemporal->direccion_cli_aaa; ?>
        </td>

        <td class="text-center">
        <?php echo $clienteTemporal->correo_cli_aaa; ?>
        </td>

        <td class="text-center">
            <a href="<?php echo site_url('clientes/actualizar'); ?>/<?php echo $clienteTemporal->id_cli_aaa; ?>"class="btn btn-danger">
            <i class="glyphicon glyphicon-ok"></i>Editar</a>
            <a href="<?php echo site_url('clientes/borrar'); ?>/<?php echo $clienteTemporal->id_cli_aaa; ?>"class="btn btn-warning">
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
  $("#tbl-clientes").DataTable();
</script>

<style media="screen">
  .dataTables_filter label input{
    border:3px solid red !important;
  }
</style>