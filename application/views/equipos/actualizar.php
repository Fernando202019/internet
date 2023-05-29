<div class="row">
  <div class="col-md-12 text-center well">
      <h3>ACTUALIZAR EQUIPO</h3>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <?php if ($equipoEditar): ?>
        <!-- <?php print_r($equipoEditar); ?> -->
        <form class="" action="<?php echo site_url('equipos/procesarActualizacion'); ?>" method="post">
            <center>
              <input type="hidden" name="id_equi_aaa"
              value="<?php echo $equipoEditar->id_equi_aaa ; ?>">
            </center>
            <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Nombre:</label>
            </div>
           <div class="col-md-7">
            <input type="text" name="nombre_equi_aaa" value="<?php echo $equipoEditar->nombre_equi_aaa; ?>" class="form-control" placeholder="Ingrese su nombre" required>
           </div> 
        </div>
        
        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Precio:</label>
            </div>
           <div class="col-md-7">
            <input type="number" name="precio_equi_aaa" value="<?php echo $equipoEditar->precio_equi_aaa; ?>" class="form-control" placeholder="Ingrese su precio" required>

           </div> 
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Descripcion:</label>
            </div>
           <div class="col-md-7">
            <input type="text" name="descripcion_equi_aaa" value="<?php echo $equipoEditar->descripcion_equi_aaa; ?>" class="form-control" placeholder="Ingrese su descripcion" required>

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
                  <a href="<?php echo site_url('equipos/index'); ?>"
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