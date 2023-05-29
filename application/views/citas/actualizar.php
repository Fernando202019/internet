<div class="row">
  <div class="col-md-12 text-center well">
      <h3>ACTUALIZAR CITAS</h3>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <?php if ($citaEditar): ?>
        <!-- <?php print_r($citaEditar); ?> -->
        <form class="" action="<?php echo site_url('citas/procesarActualizacion'); ?>" method="post">
            <center>
              <input type="hidden" name="id_cit_aaa"
              value="<?php echo $citaEditar->id_cit_aaa ; ?>">
            </center>
            <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Cedula:</label>
            </div>
           <div class="col-md-7">
            <input type="number" name="cedula_cit_aaa" value="<?php echo $citaEditar->cedula_cit_aaa; ?>" class="form-control" placeholder="Ingrese la cedula" required>
           </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Nombre:</label>
            </div>
           <div class="col-md-7">
            <input type="text" name="nombre_cit_aaa" value="<?php echo $citaEditar->nombre_cit_aaa; ?>" class="form-control" placeholder="Ingrese su nombre" required>

           </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Apellido:</label>
            </div>
           <div class="col-md-7">
            <input type="text" name="apellido_cit_aaa" value="<?php echo $citaEditar->apellido_cit_aaa; ?>" class="form-control" placeholder="Ingrese su apellido" required>

           </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">email:</label>
            </div>
           <div class="col-md-7">
            <input type="email" name="email_cit_aaa" value="<?php echo $citaEditar->email_cit_aaa; ?>" class="form-control" placeholder="Ingrese su email" required>

           </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Celular:</label>
            </div>
           <div class="col-md-7">
            <input type="number" name="celular_cit_aaa" value="<?php echo $citaEditar->celular_cit_aaa; ?>" class="form-control" placeholder="Ingrese su celular" required>

           </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Provincia:</label>
            </div>
           <div class="col-md-7">
             <select class="form-control" name="provincia_cit_aaa" id="provincia_cit_aaa" required>
                       <option value="">--Seleccione una provincia--</option>
                       <option value="PICHINCHA">PICHINCHA</option>
                       <option value="SANTO DOMINGO">SANTO DOMINGO</option>
                       <option value="AZOGUES">AZOGUES</option>
                       <option value="COTOPAXI">COTOPAXI</option>
                   </select>
            <!--<input type="text" name="provincia_cit_aaa" value="<?php echo $citaEditar->provincia_cit_aaa; ?>" class="form-control" placeholder="Ingrese su provincia" required>-->

           </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Sucursal:</label>
            </div>
           <div class="col-md-7">
             <select class="form-control" name="sucursal_cit_aaa" id="sucursal_cit_aaa" required>
                       <option value="">--Seleccione una ciudad--</option>
                       <option value="QUITO">QUITO</option>
                       <option value="SANTO DOMINGO">SANTO DOMINGO</option>
                       <option value="CUENCA">CUENCA</option>
                       <option value="LATACUNGA">LATACUNGA</option>
                   </select>
            <!--<input type="text" name="sucursal_cit_aaa" value="<?php echo $citaEditar->sucursal_cit_aaa; ?>" class="form-control" placeholder="Ingrese la sucursal" required>-->

           </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Fecha:</label>
            </div>
           <div class="col-md-7">
            <input type="date" name="fecha_cit_aaa" value="<?php echo $citaEditar->fecha_cit_aaa; ?>" min="2023-02-02" max="2023-02-28" class="form-control" placeholder="Ingrese la fecha" required>

           </div>
        </div>
        <br>
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
                  <a href="<?php echo site_url('citas/index'); ?>"
                    class="btn btn-danger">
                    <i class="glyphicon glyphicon-remove"></i>
                    Cancelar
                  </a>
              </div>
            </div>
        </form>

    <?php else: ?>
        <div class="alert alert-danger">
            <b>No se encontro las citas :(</b>
        </div>
    <?php endif; ?>
  </div>
</div>
