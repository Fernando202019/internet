<div class="row">
  <div class="col-md-12 text-center well">
      <h3>ACTUALIZAR VENDEDORES</h3>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <?php if ($vendedorEditar): ?>
        <!-- <?php print_r($vendedorEditar); ?> -->
        <form class="" action="<?php echo site_url('vendedores/procesarActualizacion'); ?>" method="post">
            <center>
              <input type="hidden" name="id_ven_aaa"
              value="<?php echo $vendedorEditar->id_ven_aaa ; ?>">
            </center>
            <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Nombre:</label>
            </div>
           <div class="col-md-7">
            <input type="text" name="nombre_ven_aaa" value="<?php echo $vendedorEditar->nombre_ven_aaa; ?>" class="form-control" placeholder="Ingrese su nombre" required>
           </div> 
        </div>
        
        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Cedula:</label>
            </div>
           <div class="col-md-7">
            <input type="number" name="cedula_ven_aaa" value="<?php echo $vendedorEditar->cedula_ven_aaa; ?>" class="form-control" placeholder="Ingrese su cedula" required>

           </div> 
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Email:</label>
            </div>
           <div class="col-md-7">
            <input type="email" name="correo_ven_aaa" value="<?php echo $vendedorEditar->correo_ven_aaa; ?>" class="form-control" placeholder="Ingrese su email" required>

           </div> 
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Telefono:</label>
            </div>
           <div class="col-md-7">
            <input type="number" name="telefono_ven_aaa" value="<?php echo $vendedorEditar->telefono_ven_aaa; ?>" class="form-control" placeholder="Ingrese su telefono" required>

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
                  <a href="<?php echo site_url('vendedores/index'); ?>"
                    class="btn btn-danger">
                    <i class="glyphicon glyphicon-remove"></i>
                    Cancelar
                  </a>
              </div>
            </div>
        </form>

    <?php else: ?>
        <div class="alert alert-danger">
            <b>No se encontro al proveedor :(</b>
        </div>
    <?php endif; ?>
  </div>
</div>

