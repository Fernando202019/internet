<center><h1>Agregar nuevo vendedor</h1></center >


<!-- Trigger the modal with a button -->
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevoVendedor">Agregar</button></center>

<!-- Modal -->
<div id="modalNuevoVendedor" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title">Nuevo Vendedor</h4></center>
      </div>
      <div class="modal-body">
        <form id="frm_nuevo_vendedor" class="" action="<?php echo site_url('vendedores/guardar'); ?>" method="post">
          <b>Nombres:</b><br>
          <input type="text" id="nombre_ven_aaa" name="nombre_ven_aaa" value="" placeholder="Ingrese sus nombres" class="form-control"><br>
          <b>Cedula:</b><br>
          <input type="number" id="cedula_ven_aaa" name="cedula_ven_aaa" value="" placeholder="Ingrese su cedula" class="form-control"><br>
          <b>Correo:</b><br>
          <input type="email" id="correo_ven_aaa" name="correo_ven_aaa" value="" placeholder="Ingrese su correo" class="form-control"><br>
          <b>Telefono:</b><br>
          <input type="number" id="telefono_ven_aaa" name="telefono_ven_aaa" value="" placeholder="Ingrese sus telefono" class="form-control"><br>
          
          <button type="subtmit" name="button" class="btn btn-success">
          Guardar
          </button>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<!-- Listado de los profesores -->
<button type="button" name="button" onclick="consultarVendedores()">
  Actualizar Datos
</button>

<div class="container">
  <div id="contenedor-listado-vendedores">
    <center><i class="fa fa-spinner fa-6x fa-spin" ></i></center>
    <center><br>esperando....</center>
  </div>
</div>

<script type="text/javascript">
  function consultarVendedores(){
    $("#contenedor-listado-vendedores").html('<center><i class="fa fa-spinner fa-6x fa-spin" ></i></center><center><br>espere....</center>') 
    $("#contenedor-listado-vendedores").load("<?php echo site_url('vendedores/listado'); ?>");
  }
  consultarVendedores();
</script>


<script type="text/javascript">
  $("#frm_nuevo_vendedor").validate({
    rules: {
        nombre_ven_aaa: {
        required: true
      },
      cedula_ven_aaa: {
        required: true,
        minlength:10,
        maxlength:10,
        digits:true
      },
      correo_ven_aaa: {
        required: true
      },
      telefono_ven_aaa: {
        required: true,
        minlength:10,
        maxlength:10,
        digits:true
      }
    },
    messages: {
        nombre_ven_aaa: {
        required: "Campo Obligatorio Ingrese Los Nombres"
      },
      cedula_ven_aaa: {
        required: "Campo Obligatorio Ingrese 10 numeros"
      },
      correo_ven_aaa: {
        required: "Campo Obligatorio Ingrese Su Correo"
      },
      telefono_ven_aaa: {
        required: "Campo Obligatorio ingrese 10 numeros"
      }
    },
    submitHandler: function(formulario) {
      //ejecutando la peticion asincrona
      $.ajax({
        type: 'post',
        url: '<?php echo site_url("vendedores/guardar"); ?>',
        data: $(formulario).serialize(),
        dataType: "json",
        success: function(data) {
          if (data.estado == 'ok') {
            Swal.fire({
              icon: 'success',
              title: 'Guardado',
              text: 'Vendedor guardado correctamente',
              showConfirmButton: false,
              timer: 1500
            }).then(() => {
              location.reload();
            })
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'No se pudo guardar el vendedor',
              showConfirmButton: false,
              timer: 1500
            })
          }
        }
      });
      return false;
    }
  });
</script>