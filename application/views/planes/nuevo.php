<legend class="text-center">

    <i class="glyphicon glyphicon-headphones"></i>
    Nuevo Plan
</legend>

    <form id="frm_nuevo_plan" class="" action="<?php echo site_url('planes/guardarPlan');?>" method="post">
        <br>
        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Tipo De Plan:</label><br><br><br>
            </div>
           <div class="col-md-7">
            <input type="text" name="tipo_plan_aaa" value="" class="form-control" placeholder="Ingrese para que dispositivo desea el plan" required>
           </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Velocidad Plan:</label><br><br><br>
            </div>
           <div class="col-md-7">
            <input type="text" name="velocidad_plan_aaa" value="" class="form-control" placeholder="Ingrese la velocidad de navegacion requerida" required>

           </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-right">
                <label for="">Costo:</label><br><br><br>
            </div>
           <div class="col-md-7">
            <input type="number" name="costo_plan_aaa" value="" class="form-control" placeholder="Ingrese el costo del plan" required>

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
                <a href="<?php echo site_url('planes/index'); ?>" class="btn btn-danger">
                <i class="glyphicon glyphicon-trash"></i>
                    CANCELAR
                </a>
            </div>


        </div>


    </form>


    <script type="text/javascript">
  $("#frm_nuevo_plan").validate({
    rules: {
        tipo_plan_aaa: {
        required: true
      },
      velocidad_plan_aaa: {
        required: true
      }
    },
    messages: {
        tipo_plan_aaa: {
        required: "Por favor ingrese el tipo de plan"
      },
      velocidad_plan_aaa: {
        required: "Por favor ingrese la velocidad del plan"
      }
    },

  });
</script>
