<div class="row">
  <div class="col-md-12 text-center well">
      <h3>ACTUALIZAR CLIENTE</h3>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <?php if ($clienteEditar): ?>
        <!-- <?php print_r($clienteEditar); ?> -->
        <form class="" action="<?php echo site_url('clientes/procesarActualizacion'); ?>" method="post">
            <center>
              <input type="hidden" name="id_cli_aaa"
              value="<?php echo $clienteEditar->id_cli_aaa ; ?>">
            </center>
            <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Nombre:</label>
            </div>
           <div class="col-md-7">
            <input type="text" name="nombre_cli_aaa" value="<?php echo $clienteEditar->nombre_cli_aaa; ?>" class="form-control" placeholder="Ingrese su nombre" required>
           </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Apellido:</label>
            </div>
           <div class="col-md-7">
            <input type="text" name="apellido_cli_aaa" value="<?php echo $clienteEditar->apellido_cli_aaa; ?>" class="form-control" placeholder="Ingrese su apellido" required>

           </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Correo Electronico:</label>
            </div>
           <div class="col-md-7">
            <input type="email" name="direccion_cli_aaa" value="<?php echo $clienteEditar->direccion_cli_aaa; ?>" class="form-control" placeholder="Ingrese su direccion" required>

           </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Direccion:</label>
            </div>
           <div class="col-md-7">
            <input type="text" name="correo_cli_aaa" value="<?php echo $clienteEditar->correo_cli_aaa; ?>" class="form-control" placeholder="Ingrese su email" required>

           </div>
        </div>
            <br>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-7">
                  <button type="submit" name="button"
                          class="btn btn-warning">
                     <i class="glyphicon glyphicon-ok"></i>
                     Actualizar
                  </button>
                  <a href="<?php echo site_url('clientes/index'); ?>"
                    class="btn btn-danger">
                    <i class="glyphicon glyphicon-remove"></i>
                    Cancelar
                  </a>
              </div>
            </div>
        </form>

    <?php else: ?>
        <div class="alert alert-danger">
            <b>No se encontro al cliente :(</b>
        </div>
    <?php endif; ?>
  </div>
</div>
