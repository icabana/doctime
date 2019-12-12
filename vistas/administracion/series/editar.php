<script type="text/javascript">
  function editar_serie() {

    if (!validar_requeridos()) {
      return 0;
    }

    var datos = $('#formSeries').serialize();

    ejecutarAccion(
      'administracion',
      'Series',
      'guardar',
      datos,
      'editar_serie2(data)'
    );

  }

  function editar_serie2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Serie Editada Exitosamente", "center");
      cargar_series();
    } else {
      mensaje_alertas("error", "Error al editar la Serie Documental", "center");
    }

  }
</script>


<?php
$froms = new Formularios();
?>



  <div class="box box-default">

    <div class="box-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div style="padding: 25px" class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Serie Documental</h3>
            </div>

            <form id="formSeries" method="post">

              <input type="hidden" class="form-control" id="id_serie" name="id_serie" 
                        value="<?php echo $datos['id_serie']; ?>">

              <div class="card-body">

              <div class="form-group">
                  <label>C&oacute;digo de la Serie<span style="color:red">*</span></label>

                  <input type="text" class="form-control requerido" id="codigo_serie" name="codigo_serie" 
                        value="<?php echo $datos['codigo_serie']; ?>">
                </div>

                <div class="form-group">
                  <label>Nombre de la Serie<span style="color:red">*</span></label>

                  <input type="text" class="form-control requerido" id="nombre_serie" name="nombre_serie" 
                        value="<?php echo $datos['nombre_serie']; ?>">
                </div>
              </div>

              <div class="card-footer">
                <button onclick="cargar_series();" class="btn btn-danger">Cancelar</button>
                <button onclick="editar_serie(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
