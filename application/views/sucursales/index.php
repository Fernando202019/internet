<script type="text/javascript">
  $("#menu-sucursales").addClass('active');
</script>

<center><h1>Nueva Sucursal</h1></center>

<!-- Trigger the modal with a button -->
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevoSucursal">Agregar</button></center>

<!-- Modal -->
<div id="modalNuevoSucursal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title">Nueva Sucursal</h4></center>
      </div>
      <div class="modal-body">
        <form id="frm_nuevo_sucursal" class="" action="<?php echo site_url('sucursales/guardar'); ?>" method="post">
        <b>Provincia:</b><br>
        <select class="form-control" name="provincia_suc_aaa" id="provincia_suc_aaa" required>
                  <option value="">--Seleccione una provincia--</option>
                  <option value="PICHINCHA">PICHINCHA</option>
                  <option value="SANTO DOMINGO">SANTO DOMINGO</option>
                  <option value="AZOGUES">AZOGUES</option>
                  <option value="COTOPAXI">COTOPAXI</option>
              </select>
        <!--<input type="text" id="provincia_suc_aaa" name="provincia_suc_aaa" value="" placeholder="Ingrese su provincia" class="form-control"><br> -->
        <b>Ciudad:</b><br>
        <select class="form-control" name="ciudad_suc_aaa" id="ciudad_suc_aaa" required>
                  <option value="">--Seleccione una ciudad--</option>
                  <option value="QUITO">QUITO</option>
                  <option value="SANTO DOMINGO">SANTO DOMINGO</option>
                  <option value="CUENCA">CUENCA</option>
                  <option value="LATACUNGA">LATACUNGA</option>
              </select>
        <!--<input type="text" id="ciudad_suc_aaa" name="ciudad_suc_aaa" value="" placeholder="Ingrese su ciudad" class="form-control"><br>-->
        <b>Estado:</b><br>
        <select class="form-control" name="estado_suc_aaa" id="estado_suc_aaa" required>
                  <option value="">--Seleccione el estado--</option>
                  <option value="ACTIVO">ACTIVO</option>
                  <option value="INACTIVO">INACTIVO</option>
                </select>
        <!--<input type="text" id="estado_suc_aaa" name="estado_suc_aaa" value="" placeholder="Ingrese el estado" class="form-control"><br>-->
        <b>Direccion:</b><br>
        <input type="text" id="direccion_suc_aaa" name="direccion_suc_aaa" value="" placeholder="Ingrese la direccion" class="form-control"><br>
        <b>Email:</b><br>
        <input type="text" id="email_suc_aaa" name="email_suc_aaa" value="" placeholder="Ingrese el email" class="form-control"><br>
        <button type="submit" name="button" class="btn btn-success">
            GUARDAR
    </button>
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<button type="button" name="button" onclick="consultarSucursales()">Actualizar datos</button>

<div class="container">
  <div id="contenedor-listado-sucursales">

  </div>
</div>

<script type="text/javascript">
  function consultarSucursales() {
    $("#contenedor-listado-sucursales").html('<center><i class="fa fa-spinner  fa-3x fa-spin"></i><br>Espere porfavor..</center>'); //fa-spin para que gire el spinner, fa-1x a 3x el tamaño, fa fa-spinner figura
    $("#contenedor-listado-sucursales").load("<?php echo site_url('sucursales/listado'); ?>");//capturar el id(#) que se ingreso en la parte de arriba
  }
  consultarSucursales();//carga datos de froma automatica la tabla                                    //llamamos a la funcion listado profesores
</script>

<script type="text/javascript">
  $("#frm_nuevo_sucursal").validate({

      direccion_suc_aaa: {
        required: true
      },
      email_suc_aaa: {
        required: true
      }
    },
    messages: {

      direccion_suc_aaa: {
        required: "Por favor ingrese la direccion"
      },
      email_suc_aaa: {
        required: "Por favor ingrese el email"
      }
    },
    submitHandler:function(formulario){
      //Ejecutando la peticion Asincrona
      $.ajax({
        type:'post',
        url:'<?php echo site_url("sucursales/guardar"); ?>',
        data:$(formulario).serialize(),
        success:function(data){
          var objetoRespuesta=JSON.parse(data);
          if (objetoRespuesta.estado=="ok" || objetoRespuesta.estado=="OK") {
            Swal.fire(
              'Confirmacion', //titulo
              objetoRespuesta.mensaje,
              'success'//tipo de alerta
            );
            $("#modalNuevoSucursal").modal("hide");
            consultarProfesores();//carga de forma automatica los datos  ingresados
          }else {
            Swal.fire(
              'Error', //titulo
              'error al insertar, intente nuevamente',
              'Error' //Tipo de alerta
            );
          }

        }
      });
    }
  });
</script>
