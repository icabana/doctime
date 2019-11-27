<script type="text/javascript">
  function editar_tipoarchivo() {

    var datos = $('#formTiposarchivo').serialize();

    ejecutarAccion(
      'configuracion',
      'Tiposarchivo',
      'guardar',
      datos,
      'editar_tipoarchivo2(data)'
    );

  }

  function editar_tipoarchivo2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Tipoarchivo Editado Exitosamente", "center");
      cargar_tiposarchivo();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }
</script>


<?php
$froms = new Formularios();
?>

<form id="formTiposarchivo" method="post">

  <div class="box box-default">


    <div class="box-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div style="padding: 25px" class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Tipoarchivo</h3>
            </div>

            <form role="form">

              <input type="hidden" class="form-control" id="id_tipoarchivo" name="id_tipoarchivo" 
                        value="<?php echo $datos['id_tipoarchivo']; ?>">

              <div class="card-body">
                <div class="form-group">
                  <label>Nombre del Tipoarchivo</label>

                  <input type="text" class="form-control" id="nombre_tipoarchivo" name="nombre_tipoarchivo" 
                        value="<?php echo $datos['nombre_tipoarchivo']; ?>">
                </div>
              </div>

              <div class="card-footer">
                <button onclick="cargar_tiposarchivo();" class="btn btn-danger">Cancelar</button>
                <button onclick="editar_tipoarchivo(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>