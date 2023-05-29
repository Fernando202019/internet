<center><h1>Agregar nuevo equipo</h1></center >


<!-- Trigger the modal with a button -->
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevoEquipo">Agregar</button></center>

<!-- Modal -->
<div id="modalNuevoEquipo" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title">Nuevo Equipo</h4></center>
      </div>
      <div class="modal-body">
        <form id="frm_nuevo_equipo" class="" action="<?php echo site_url('equipos/guardar'); ?>" method="post">
          <b>Nombre Equipo:</b><br>
          <input type="text" id="nombre_equi_aaa" name="nombre_equi_aaa" value="" placeholder="Ingrese nombre del equipo" class="form-control"><br>
          <b>Precio:</b><br>
          <input type="number" id="precio_equi_aaa" name="precio_equi_aaa" value="" placeholder="Ingrese el precio" class="form-control"><br>
          <b>Descripcion:</b><br>
          <input type="text" id="descripcion_equi_aaa" name="descripcion_equi_aaa" value="" placeholder="Ingrese descripcion del equipo" class="form-control"><br>

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
<button type="button" name="button" onclick="consultarEquipos()">
  Actualizar Datos
</button>

<div class="container">
  <div id="contenedor-listado-equipos">
    <center><i class="fa fa-spinner fa-6x fa-spin" ></i></center>
    <center><br>esperando....</center>
  </div>
</div>

<script type="text/javascript">
  function consultarEquipos(){
    $("#contenedor-listado-equipos").html('<center><i class="fa fa-spinner fa-6x fa-spin" ></i></center><center><br>espere....</center>') 
    $("#contenedor-listado-equipos").load("<?php echo site_url('equipos/listado'); ?>");
  }
  consultarEquipos();
</script>


<script type="text/javascript">
  $("#frm_nuevo_equipo").validate({
    rules: {
        nombre_equi_aaa: {
        required: true,
        minlength:3
      },
      precio_equi_aaa: {
        required: true,
        minlength:3,
        maxlength:3,
        digits:true
      },
      descripcion_equi_aaa: {
        required: true
      }
    },
    messages: {
        nombre_equi_aaa: {
        required: "Campo Obligatorio Ingrese el nombre del equipo a vender",
        minlength:"Nombre especifico del equipo"
      },
      precio_equi_aaa: {
        required: "Campo Obligatorio Ingrese el precio del equipo",
        minlength: "Ingrese un valor correcto",
        maxlength: "Ingrese un valor veridico"
      },
      descripcion_equi_aaa: {
        required: "Campo Obligatorio Ingrese La Descripcion"
      }
    },
    submitHandler: function(formulario) {
      //ejecutando la peticion asincrona
      $.ajax({
        type: 'post',
        url: '<?php echo site_url("equipos/guardar"); ?>',
        data: $(formulario).serialize(),
        dataType: "json",
        success: function(data) {
          if (data.estado == 'ok') {
            Swal.fire({
              icon: 'success',
              title: 'Guardado',
              text: 'Equipo guardado correctamente',
              showConfirmButton: false,
              timer: 1500
            }).then(() => {
              location.reload();
            })
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'No se pudo guardar el equipo',
              showConfirmButton: false,
              timer: 1500
            })
          }
        }
      });
      return false;
    }
  });
</script><script type="text/javascript">
  $("#frm_nuevo_equipo").validate({
    rules: {
        nombre_equi_aaa: {
        required: true
      },
      precio_equi_aaa: {
        required: true
      },
      descripcion_equi_aaa: {
        required: true
      }
    },
    messages: {
        nombre_equi_aaa: {
        required: "Campo Obligatorio Ingrese Los Nombres"
      },
      precio_equi_aaa: {
        required: "Campo Obligatorio Ingrese La Cedula"
      },
      descripcion_equi_aaa: {
        required: "Campo Obligatorio Ingrese Su Correo"
      }
    },
    submitHandler: function(formulario) {
      //ejecutando la peticion asincrona
      $.ajax({
        type: 'post',
        url: '<?php echo site_url("equipos/guardar"); ?>',
        data: $(formulario).serialize(),
        dataType: "json",
        success: function(data) {
          if (data.estado == 'ok') {
            Swal.fire({
              icon: 'success',
              title: 'Guardado',
              text: 'Equipo guardado correctamente',
              showConfirmButton: false,
              timer: 1500
            }).then(() => {
              location.reload();
            })
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'No se pudo guardar el equipo',
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