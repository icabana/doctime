<script type="text/javascript">
  function editar_expediente() {

    var datos = $('#formExpedientes').serialize();

    ejecutarAccion(
      'configuracion',
      'Expedientes',
      'guardar',
      datos,
      'editar_expediente2(data)'
    );

  }

  function editar_expediente2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Expediente Editado Exitosamente", "center");
      cargar_expedientes();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }
</script>


<?php
$froms = new Formularios();
?>

<form id="formExpedientes" method="post">

  <div class="box box-default">


    <div class="box-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div style="padding: 25px" class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Expediente</h3>
            </div>

            <form role="form">

              <input type="hidden" class="form-control" id="id_expediente" name="id_expediente" 
                        value="<?php echo $datos['id_expediente']; ?>">

              <div class="card-body">
                <div class="form-group">
                  <label>Nombre del Expediente</label>

                  <input type="text" class="form-control" id="nombre_expediente" name="nombre_expediente" 
                        value="<?php echo $datos['nombre_expediente']; ?>">
                </div>
              </div>

              <div class="card-footer">
                <button onclick="cargar_expedientes();" class="btn btn-danger">Cancelar</button>
                <button onclick="editar_expediente(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>