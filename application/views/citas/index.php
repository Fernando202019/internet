<script type="text/javascript">
  $("#menu-citas").addClass('active');
</script>
<center><h1>Nueva Cita</h1></center>

<!-- Trigger the modal with a button -->
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevaCita">Agregar</button></center>

<!-- Modal -->
<div id="modalNuevaCita" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title">Agendar Cita</h4></center>
      </div>
      <div class="modal-body">
        <form id="frm_nueva_cita" class="" action="<?php echo site_url('citas/guardar'); ?>" method="post">
        <b>Cedula:</b><br>
        <input type="number" id="cedula_cit_aaa" name="cedula_cit_aaa" value="" placeholder="Ingrese la cedula" class="form-control"><br>
        <b>Nombre:</b><br>
        <input type="text" id="nombre_cit_aaa" name="nombre_cit_aaa" value="" placeholder="Ingrese su nombre" class="form-control"><br>
        <b>Apellido:</b><br>
        <input type="text" id="apellido_cit_aaa" name="apellido_cit_aaa" value="" placeholder="Ingrese su apellido" class="form-control"><br>
        <b>Email:</b><br>
        <input type="text" id="email_cit_aaa" name="email_cit_aaa" value="" placeholder="Ingrese su email" class="form-control"><br>
        <b>Celular:</b><br>
        <input type="text" id="celular_cit_aaa" name="celular_cit_aaa" value="" placeholder="Ingrese su direccion" class="form-control"><br>
        <b>Provincia:</b><br>
        <input type="text" id="provincia_cit_aaa" name="provincia_cit_aaa" value="" placeholder="Ingrese su telefono" class="form-control"><br>
        <b>Sucursal:</b><br>
        <input type="text" id="sucursal_cit_aaa" name="sucursal_cit_aaa" value="" placeholder="Ingrese su telefono" class="form-control"><br>
        <b>fecha:</b><br>
        <input type="date" id="fecha_cit_aaa" name="fecha_cit_aaa" value="2023-02-02" min="2023-02-02" max="2023-02-28" placeholder="Ingrese su telefono" class="form-control"><br>
        <button type="submit" name="button" class="btn btn-success">
            GUARDAR
    </button>
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<button type="button" name="button" onclick="consultarCitas()">Actualizar cita</button>

<div class="container">
  <div id="contenedor-listado-citas">

  </div>
</div>


<script type="text/javascript">
  function consultarCitas() {
    $("#contenedor-listado-citas").html('<center><i class="fa fa-spinner  fa-3x fa-spin"></i><br>Espere porfavor..</center>'); //fa-spin para que gire el spinner, fa-1x a 3x el tamaño, fa fa-spinner figura
    $("#contenedor-listado-citas").load("<?php echo site_url('citas/listado'); ?>");//capturar el id(#) que se ingreso en la parte de arriba
  }
  consultarCitas();//carga datos de froma automatica la tabla                                    //llamamos a la funcion listado profesores
</script>

<script type="text/javascript">
  $("#frm_nueva_cita").validate({
    rules: {
      cedula_cit_aaa: {
        required: true,
        minlength:10,
        maxlength:10,
        digits:true
      },
      nombre_cit_aaa: {
        required: true,
        minlength:3
      },
      apellido_cit_aaa: {
        required: true,
        minlength: 3
      },
      email_cit_aaa: {
        required: true
      },
      celular_cit_aaa: {
        required: true,
        minlength:10,
        maxlength:10,
        digits:true
      },
      provincia_cit_aaa: {
        required: true,
        minlength: 3
      },
      sucursal_cit_aaa: {
        required: true,
        minlength: 3
      },
      fecha_cit_aaa: {
        required: true
      }
    },
    messages: {
        cedula_cit_aaa: {
        required: "Campo obligatorio",
        minlength:"Cedula incorrecta",
        maxlength:"Demasiados Dijitos"
      },
      nombre_cit_aaa: {
        required: "Campo obligatorio",
        minlength: "Nombre incorrecto"
      },
      apellido_cit_aaa: {
        required: "Campo obligatorio",
        minlength: "Aapellido incorrecto"
      },
      email_cit_aaa: {
        required: "Campo obligatorio"
      },
      celular_cit_aaa: {
        required: "Campo obligatorio",
        minlength:"Dijitos incorrectos",
        maxlength:"Demasiados Dijitos"
      },
      provincia_cit_aaa: {
        required: "Campo obligatorio",
        minlength: "Provincia incorrecta"
      },
      sucursal_cit_aaa: {
        required: "Campo obligatorio",
        minlength: "Sucursal incorrecto"
      },
      fecha_cit_aaa: {
        required: "Campo obligatorio"
      }
    },
    submitHandler:function(formulario){
      //Ejecutando la peticion Asincrona
      $.ajax({
        type:'post',
        url:'<?php echo site_url("citas/guardar"); ?>',
        data:$(formulario).serialize(),
        success:function(data){
          var objetoRespuesta=JSON.parse(data);
          if (objetoRespuesta.estado=="ok" || objetoRespuesta.estado=="OK") {
            Swal.fire(
              'Confirmacion', //titulo
              objetoRespuesta.mensaje,
              'success'//tipo de alerta
            );
            $("#modalNuevoProveedor").modal("hide");
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
