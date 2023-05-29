<script type="text/javascript">
  $("#menu-proveedores").addClass('active');
</script>
<center><h1>Nuevo Proveedor</h1></center>

<!-- Trigger the modal with a button -->
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevaProveedor">Agregar</button></center>

<!-- Modal -->
<div id="modalNuevaProveedor" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title">Nuevo Proveedor</h4></center>
      </div>
      <div class="modal-body">
        <form id="frm_nuevo_proveedor" class="" action="<?php echo site_url('proveedores/guardar'); ?>" method="post">
        <b>Cedula:</b><br>
        <input type="number" id="cedula_pro_aaa" name="cedula_pro_aaa" value="" placeholder="Ingrese la cedula" class="form-control"><br>
        <b>Nombre:</b><br>
        <input type="text" id="nombre_pro_aaa" name="nombre_pro_aaa" value="" placeholder="Ingrese su nombre" class="form-control"><br>
        <b>Apellido:</b><br>
        <input type="text" id="apellido_pro_aaa" name="apellido_pro_aaa" value="" placeholder="Ingrese su apellido" class="form-control"><br>
        <b>Email:</b><br>
        <input type="text" id="email_pro_aaa" name="email_pro_aaa" value="" placeholder="Ingrese su email" class="form-control"><br>
        <b>Direccion:</b><br>
        <input type="text" id="direccion_pro_aaa" name="direccion_pro_aaa" value="" placeholder="Ingrese su direccion" class="form-control"><br>
        <b>Telefono:</b><br>
        <input type="number" id="telefono_pro_aaa" name="telefono_pro_aaa" value="" placeholder="Ingrese su telefono" class="form-control"><br>
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
<!-- FIN DEL MODAL -->

<!-- INICIO DEL MODAL -->
<!-- Modal -->
<div id="modalNuevoProveedor" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title">Nuevo Proveedor</h4></center>
      </div>
      <div class="modal-body">
        <form id="frm_nuevo_proveedor" class="" action="<?php echo site_url('proveedores/guardar'); ?>" method="post">
        <b>Cedula:</b><br>
        <input type="number" id="cedula_pro_aaa" name="cedula_pro_aaa" value="" placeholder="Ingrese la cedula" class="form-control"><br>
        <b>Nombre:</b><br>
        <input type="text" id="nombre_pro_aaa" name="nombre_pro_aaa" value="" placeholder="Ingrese su nombre" class="form-control"><br>
        <b>Apellido:</b><br>
        <input type="text" id="apellido_pro_aaa" name="apellido_pro_aaa" value="" placeholder="Ingrese su apellido" class="form-control"><br>
        <b>Email:</b><br>
        <input type="text" id="email_pro_aaa" name="email_pro_aaa" value="" placeholder="Ingrese su email" class="form-control"><br>
        <b>Direccion:</b><br>
        <input type="text" id="direccion_pro_aaa" name="direccion_pro_aaa" value="" placeholder="Ingrese su direccion" class="form-control"><br>
        <b>Telefono:</b><br>
        <input type="number" id="telefono_pro_aaa" name="telefono_pro_aaa" value="" placeholder="Ingrese su telefono" class="form-control"><br>
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

<!-- FIN DEL MODAL -->

<button type="button" name="button" onclick="consultarProveedores()">Actualizar datos</button>
<div class="container">
  <div id="contenedor-listado-proveedores">
  </div>
</div>


<script type="text/javascript">
  function consultarProveedores() {
    $("#contenedor-listado-proveedores").html('<center><i class="fa fa-spinner  fa-3x fa-spin"></i><br>Espere porfavor..</center>'); //fa-spin para que gire el spinner, fa-1x a 3x el tamaño, fa fa-spinner figura
    $("#contenedor-listado-proveedores").load("<?php echo site_url('proveedores/listado'); ?>");//capturar el id(#) que se ingreso en la parte de arriba
  }
  consultarProveedores();//carga datos de froma automatica la tabla   //llamamos a la funcion listado profesores
</script>

<script type="text/javascript">
  $("#frm_nuevo_proveedor").validate({
    rules: {
      cedula_pro_aaa: {
      minlength:10,
      maxlength:10,
      digits:true,
      required: true
      },
      nombre_pro_aaa: {
        required: true,
        minlength:3
      },
      apellido_pro_aaa: {
        required: true,
        minlength:3
      },
      email_pro_aaa: {
        required: true
      },
      direccion_pro_aaa: {
        required: true
      },
      telefono_pro_aaa: {
        required: true,
        minlength:10,
        maxlength:10,
        digits:true
      }
    },
    messages: {
        cedula_pro_aaa: {
        minlength:"Ingrese maximo 10 numeros",
        maxlength:"Ingrese minimo 10 numeros",
        required: "Por favor ingrese la cedula"
      },
      nombre_pro_aaa: {
        required: "Por favor ingrese el nombre",
        minlength:"Nombre Incorrecto"
      },
      apellido_pro_aaa: {
        required: "Por favor ingrese el apellido",
        minlength:"Apellido Incorrecto"
      },
      email_pro_aaa: {
        required: "Por favor ingrese el email"
      },
      direccion_pro_aaa: {
        required: "Por favor ingrese la direccion"
      },
      telefono_pro_aaa: {
        required: "Por favor ingrese el telefono",
        maxlength:"Ingrese maximo 10 numeros",
        minlength:"Ingrese minimo 10 numeros"
      }
    },
    submitHandler:function(formulario){
      //Ejecutando la peticion Asincrona
      $.ajax({
        type:'post',
        url:'<?php echo site_url("proveedores/guardar"); ?>',
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

