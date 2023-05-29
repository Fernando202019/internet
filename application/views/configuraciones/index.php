<script type="text/javascript">
  $("#menu-configuraciones").addClass('active');
</script>
<center><h1>Nueva Configuracion</h1></center>

<!-- Trigger the modal with a button -->
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevoConfiguracion">Agregar</button></center>

<!-- Modal -->
<div id="modalNuevoConfiguracion" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title">Nueva Configuracion</h4></center>
      </div>
      <div class="modal-body">
        <form id="frm_nuevo_configuracion" class="" action="<?php echo site_url('configuraciones/guardar'); ?>" method="post">
        <b>Nombre Empresa:</b><br>
        <input type="text" id="nombrempre_con_aaa" name="nombrempre_con_aaa" value="" placeholder="Ingrese nombre de la empresa" class="form-control"><br>
        <b>Ruc:</b><br>
        <input type="number" id="ruc_con_aaa" name="ruc_con_aaa" value="" placeholder="Ingrese su ruc" class="form-control"><br>
        <b>Telefono:</b><br>
        <input type="number" id="telefono_con_aaa" name="telefono_con_aaa" value="" placeholder="Ingrese el telefono" class="form-control"><br>
        <b>Direccion:</b><br>
        <input type="text" id="direccion_con_aaa" name="direccion_con_aaa" value="" placeholder="Ingrese la direccion" class="form-control"><br>
        <b>Representante:</b><br>
        <input type="text" id="representante_con_aaa" name="representante_con_aaa" value="" placeholder="Ingrese el representante" class="form-control"><br>
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

<button type="button" name="button" onclick="consultarConfiguraciones()">Actualizar datos</button>

<div class="container">
  <div id="contenedor-listado-configuraciones">

  </div>
</div>

<script type="text/javascript">
  function consultarConfiguraciones() {
    $("#contenedor-listado-configuraciones").html('<center><i class="fa fa-spinner  fa-3x fa-spin"></i><br>Espere porfavor..</center>'); //fa-spin para que gire el spinner, fa-1x a 3x el tamaño, fa fa-spinner figura
    $("#contenedor-listado-configuraciones").load("<?php echo site_url('configuraciones/listado'); ?>");//capturar el id(#) que se ingreso en la parte de arriba
  }
  consultarConfiguraciones();//carga datos de froma automatica la tabla                                    //llamamos a la funcion listado profesores
</script>

<script type="text/javascript">
  $("#frm_nuevo_configuracion").validate({
    rules: {
        nombrempre_con_aaa: {
        required: true,
        minlength:3
      },
      ruc_con_aaa: {
        required: true,
        minlength:13,
        maxlength:13,
        digits:true
      },
      telefono_con_aaa: {
        required: true,
        minlength:10,
        maxlength:10,
        digits:true,
      },
      direccion_con_aaa: {
        required: true
      },
      representante_con_aaa: {
        required: true,
        minlength:3
      }
    },
    messages: {
        nombrempre_con_aaa: {
        required: "Por favor ingrese el nombre de la empresa",
        minlength: "Ingrese correcto el nombre de la empresa"
      },
      ruc_con_aaa: {
        required: "Por favor ingrese el ruc",
        minlength: "Ingrese almenos 13 digitos",
        maxlength: "Ruc icorrecto"
      },
      telefono_con_aaa: {
        required: "Por favor ingrese el telefono",
        minlength: "Ingrese almenos 10 digitos",
        maxlength: "Telefono icorrecto"
      },
      direccion_con_aaa: {
        required: "Por favor ingrese la direccion"
      },
      representante_con_aaa: {
        required: "Por favor ingrese el representante",
        minlength: "Ingrese el nombre correcto del representante"
      }
    },
    submitHandler:function(formulario){
      //Ejecutando la peticion Asincrona
      $.ajax({
        type:'post',
        url:'<?php echo site_url("configuraciones/guardar"); ?>',
        data:$(formulario).serialize(),
        success:function(data){
          var objetoRespuesta=JSON.parse(data);
          if (objetoRespuesta.estado=="ok" || objetoRespuesta.estado=="OK") {
            Swal.fire(
              'Confirmacion', //titulo
              objetoRespuesta.mensaje,
              'success'//tipo de alerta
            );
            $("#modalNuevoConfiguracion").modal("hide");
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