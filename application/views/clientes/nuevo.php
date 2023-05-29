<legend class="text-center">

    <i class="glyphicon glyphicon-user"></i>
    Nuevo Cliente
</legend>

    <form id="frm_nuevo_cliente" class="" action="<?php echo site_url('clientes/guardarCliente');?>" method="post">
        <br>
        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Nombre:</label><br><br><br>
            </div>
           <div class="col-md-7">
            <input type="text" name="nombre_cli_aaa" value="" class="form-control" placeholder="Ingrese su nombre" required>
           </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Apellido:</label><br><br><br>
            </div>
           <div class="col-md-7">
            <input type="text" name="apellido_cli_aaa" value="" class="form-control" placeholder="Ingrese su apellido" required>

           </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Correo Electronico:</label><br><br><br>
            </div>
           <div class="col-md-7">
            <input type="email" name="direccion_cli_aaa" value="" class="form-control" placeholder="Ingrese su direccion" required>

           </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Direccion:</label>
            </div>
           <div class="col-md-7">
            <input type="text" name="correo_cli_aaa" value="" class="form-control" placeholder="Ingrese su email" required>

           </div>
        </div>

        <br>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-7">
                <button type="submit" name="button" class="btn btn-primary">
                    <i class="glyphicon glyphicon-edit"></i>
                    GUARDAR
                </button>
                <a href="<?php echo site_url('clientes/index'); ?>" class="btn btn-danger">
                <i class="glyphicon glyphicon-trash"></i>
                    CANCELAR
                </a>
            </div>


        </div>

    </form>

    <script type="text/javascript">
  $("#frm_nuevo_cliente").validate({
    rules: {
        nombre_cli_aaa: {
        required: true,
        minlength: 3
      },
      apellido_cli_aaa: {
        required: true,
        minlength:3
      },
      direccion_cli_aaa: {
        required: true
      },
      correo_cli_aaa: {
        required: true
      }
    },
    messages: {
        nombre_cli_aaa: {
        required: "Por favor ingrese su nombre",
        minlength: "Ingrese un nombre valido"
      },
      apellido_cli_aaa: {
        required: "Por favor ingrese su apellido",
        minlength: "Ingrese un apellido valido"
      },
      direccion_cli_aaa: {
        required: "Por favor ingrese la direccion"
      },
      correo_cli_aaa: {
        required: "Por favor ingrese el email"
      }
    },

  });
</script>
