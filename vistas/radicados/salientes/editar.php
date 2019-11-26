<script type="text/javascript">
  function editar_saliente() {

    var datos = $('#formSalientes').serialize();

    ejecutarAccion(
      'configuracion',
      'Salientes',
      'guardar',
      datos,
      'editar_saliente2(data)'
    );

  }

  function editar_saliente2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Saliente Editado Exitosamente", "center");
      cargar_salientes();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }
</script>


<?php
$froms = new Formularios();
?>

<form id="formSalientes" method="post">

  <div class="box box-default">


    <div class="box-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div style="padding: 25px" class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Saliente</h3>
            </div>

            <form role="form">

              <input type="hidden" class="form-control" id="id_saliente" name="id_saliente" 
                        value="<?php echo $datos['id_saliente']; ?>">

              <div class="card-body">
                <div class="form-group">
                  <label>Nombre del Saliente</label>

                  <input type="text" class="form-control" id="nombre_saliente" name="nombre_saliente" 
                        value="<?php echo $datos['nombre_saliente']; ?>">
                </div>
              </div>

              <div class="card-footer">
                <button onclick="cargar_salientes();" class="btn btn-danger">Cancelar</button>
                <button onclick="editar_saliente(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>