<div class="row">
  <div class="col-md-12 text-center well">
      <h3>ACTUALIZAR PROVEEDORES</h3>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <?php if ($proveedorEditar): ?>
        <!-- <?php print_r($proveedorEditar); ?> -->
        <form class="" action="<?php echo site_url('proveedores/procesarActualizacion'); ?>" method="post">
            <center>
              <input type="hidden" name="id_pro_aaa"
              value="<?php echo $proveedorEditar->id_pro_aaa ; ?>">
            </center>
            <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Cedula:</label>
            </div>
           <div class="col-md-7">
            <input type="number" name="cedula_pro_aaa" value="<?php echo $proveedorEditar->cedula_pro_aaa; ?>" class="form-control" placeholder="Ingrese su cedula" required>
           </div> 
        </div>
        
        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Nombre:</label>
            </div>
           <div class="col-md-7">
            <input type="text" name="nombre_pro_aaa" value="<?php echo $proveedorEditar->nombre_pro_aaa; ?>" class="form-control" placeholder="Ingrese su nombre" required>

           </div> 
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Apellido:</label>
            </div>
           <div class="col-md-7">
            <input type="text" name="apellido_pro_aaa" value="<?php echo $proveedorEditar->apellido_pro_aaa; ?>" class="form-control" placeholder="Ingrese su apellido" required>

           </div> 
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Email:</label>
            </div>
           <div class="col-md-7">
            <input type="email" name="email_pro_aaa" value="<?php echo $proveedorEditar->email_pro_aaa; ?>" class="form-control" placeholder="Ingrese su email" required>

           </div> 
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Direccion:</label>
            </div>
           <div class="col-md-7">
            <input type="text" name="direccion_pro_aaa" value="<?php echo $proveedorEditar->direccion_pro_aaa; ?>" class="form-control" placeholder="Ingrese su direccion" required>

           </div> 
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Telefono:</label>
            </div>
           <div class="col-md-7">
            <input type="text" name="telefono_pro_aaa" value="<?php echo $proveedorEditar->telefono_pro_aaa; ?>" class="form-control" placeholder="Ingrese su telefono" required>

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
                  <a href="<?php echo site_url('proveedores/index'); ?>"
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